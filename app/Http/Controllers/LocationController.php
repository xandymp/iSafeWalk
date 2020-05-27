<?php

namespace App\Http\Controllers;

use App\Sector;
use App\Zone;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function showPreviousLocations(int $id, $heatMap = false, $startTime = null, $endTime = null)
    {
        $locations = [];
        $previousLocations = DB::table('location_history AS lh')
            ->join('sectors AS s', 'lh.sector_id', '=', 's.id')
            ->select(
                'lh.id',
                'lh.device_id',
                'lh.sector_id',
                's.name AS sector_name',
                'lh.location_x',
                'lh.location_y',
                'lh.location_z',
                'lh.location_time'
            )
            ->selectRaw("'00:00:00' AS duration")
            ->where('lh.device_id', '=', $id)
            ->whereNull('lh.deleted_at')
            ->when($startTime, function ($query, $startTime) {
                return $query->where('location_time', '>=', $startTime);
            })
            ->when($endTime, function ($query, $endTime) {
                return $query->where('location_time', '<=', $endTime);
            })
            ->when($heatMap, function ($query) {
                $query->orderBy('location_x');
                $query->orderBy('location_y');
                return $query;
            })
            ->orderBy('lh.location_time', 'desc')
            ->get();

        if ($previousLocations->count() == 0) {
            return $locations;
        }

        foreach ($previousLocations as $previousLocation) {
            $locations[] = $previousLocation;
        }

        if (!$heatMap) {
            $locations = $this->groupPreviousLocations($previousLocations);
        }
        $locations = $this->adjustPositionWithSector($locations);

        return $locations;
    }

    private function groupPreviousLocations($previousLocations)
    {
        $locations = [];
        foreach ($previousLocations as $previousLocation) {
            $samePosition = $this->checkPosition($previousLocation, end($locations));

            if (!$samePosition) {
                if (!empty($locations)) {
                    $timeDifference = strtotime(end($locations)->location_time) - strtotime($previousLocation->location_time);
                    $locations[array_key_last($locations)]->duration = date('H:i:s', $timeDifference);
                }

                $locations[] = $previousLocation;
            }
        }

        $timeDifference = strtotime(end($locations)->location_time) - strtotime($previousLocation->location_time);
        $locations[array_key_last($locations)]->duration = date('H:i:s', $timeDifference);

        return $locations;
    }

    private function checkPosition($location, $previousLocation)
    {
        if (empty($previousLocation)) {
            return false;
        }

        if ($location->sector_id != $previousLocation->sector_id) {
            return true;
        }

        if (abs($location->location_x - $previousLocation->location_x) > 0.5) {
            return false;
        }

        if (abs($location->location_y - $previousLocation->location_y) > 0.5) {
            return false;
        }

        return true;
    }

    private function adjustPositionWithSector($originalLocations)
    {
        $locations = [];
        foreach ($originalLocations as $location) {
            $sector = Sector::find($location->sector_id);
            $location->location_x += $sector->initial_x;
            $location->location_y += $sector->initial_y;

            $locations[] = $location;
        }

        return $locations;
    }

    protected function getZones()
    {
        $zonesAndSectors = [];
        $zones = Zone::get();

        foreach ($zones as $zone) {
            $zonesAndSectors[] = $this->decorateZone($zone);

            $sectors = $zone->sectors;
            foreach ($sectors as $sector) {
                $zonesAndSectors['sectors'][] = $this->decorateSector($sector);
            }
        }

        return $zonesAndSectors;
    }

    private function decorateZone($zone)
    {
        return [
            'zone_id' => $zone->id,
            'zone_name' => $zone->name,
            'zone_x_length' => $zone->x_length,
            'zone_y_width' => $zone->y_width,
            'zone_z_height' => $zone->z_height,
        ];
    }

    private function decorateSector($sector)
    {
        return [
            'name' => $sector->name,
            'x_length' => $sector->x_length,
            'y_width' => $sector->y_width,
            'z_height' => $sector->z_height,
            'zone_id' => $sector->zone_id,
            'initial_x' => $sector->initial_x,
            'initial_y' => $sector->initial_y,
        ];
    }
}
