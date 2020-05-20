<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function showPreviousLocations(int $id, $startTime = null, $endTime = null)
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
            ->orderBy('lh.location_time', 'desc')
            ->get();

        if ($previousLocations->count() == 0) {
            return $locations;
        }

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

        if (abs($location->location_x - $previousLocation->location_x) > 0.5) {
            return false;
        }

        if (abs($location->location_y - $previousLocation->location_y) > 0.5) {
            return false;
        }

        return true;

    }
}
