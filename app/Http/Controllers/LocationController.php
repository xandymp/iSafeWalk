<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function showCurrentLocation(int $id)
    {
        $locations = $this->getDeviceCurrentLocations($id);
        return $this->discoverLocation($locations);
    }

    public function showPreviousLocations(int $id)
    {
        $locations = [];
        $previousLocations = $this->getDevicePreviousLocations($id);

        if ($previousLocations->count() == 0) {
            return $locations;
        }

        foreach ($previousLocations as $previousLocation) {
            $location = $this->getDeviceLocation($id, $previousLocation->sector_id, $previousLocation->created_at);

            $samePosition = $this->checkPosition($location, end($locations));

            if (!$samePosition) {
                if (!empty($locations)) {
                    $timeDifference = strtotime(end($locations)['time']) - strtotime($location['time']);
                    $locations[array_key_last($locations)]['duration'] = date('H:i:s', $timeDifference);
                }

                $locations[] = $location;
            }
        }

        $timeDifference = strtotime(end($locations)['time']) - strtotime($location['time']);
        $locations[array_key_last($locations)]['duration'] = date('H:i:s', $timeDifference);

        return $locations;
    }

    private function checkPosition($location, $previousLocation)
    {
        if (empty($previousLocation)) {
            return false;
        }

        if (abs($location['horizontal'] - $previousLocation['horizontal']) > 1) {
            return false;
        }

        if (abs($location['vertical'] - $previousLocation['vertical']) > 1) {
            return false;
        }

        return true;

    }

    private function getDeviceCurrentLocations(int $deviceId)
    {
        $sectorId = $this->getSectorId($deviceId);

        return DB::table('location_history AS lh')
            ->join('sectors_routers AS sr', 'lh.router_id', '=', 'sr.router_id')
            ->select(
                'lh.id',
                'lh.device_id',
                'sr.sector_id',
                'lh.router_id',
                'sr.router_horizontal',
                'sr.router_vertical',
                'lh.distance',
                'lh.created_at'
            )
            ->where('lh.device_id', '=', $deviceId)
            ->where('sr.sector_id', '=', $sectorId)
            ->whereNull('lh.deleted_at')
            ->orderBy('lh.created_at', 'desc')
            ->orderBy('lh.distance')
            ->get();
    }

    private function getSectorId(int $deviceId)
    {
        $subQuery =  DB::table('location_history AS lh')
            ->join('sectors_routers AS sr', 'lh.router_id', '=', 'sr.router_id')
            ->selectRaw('sr.sector_id, COUNT(0) as routers, lh.created_at')
            ->where('lh.device_id', '=', $deviceId)
            ->groupBy('sr.sector_id', 'lh.created_at')
            ->havingRaw('COUNT(0) >= ?', [3])
            ->orderBy('lh.created_at', 'desc');

        return DB::table(DB::raw("({$subQuery->toSql()}) as sub"))
            ->mergeBindings($subQuery)
            ->orderBy('sub.routers', 'desc')
            ->orderBy('sub.created_at', 'desc')
            ->limit(1)
            ->value('sub.sector_id');
    }

    private function getDevicePreviousLocations(int $deviceId)
    {
        $subQuery =  DB::table('location_history AS lh')
            ->join('sectors_routers AS sr', 'lh.router_id', '=', 'sr.router_id')
            ->selectRaw('sr.sector_id, COUNT(0) as routers, lh.created_at')
            ->where('lh.device_id', '=', $deviceId)
            ->groupBy('sr.sector_id', 'lh.created_at')
            ->havingRaw('COUNT(0) >= ?', [3])
            ->orderBy('lh.created_at', 'desc');

        return DB::table(DB::raw("({$subQuery->toSql()}) as sub"))
            ->mergeBindings($subQuery)
            ->orderBy('sub.created_at', 'desc')
            ->limit(100)
            ->get();
    }

    private function getDeviceLocation(int $deviceId, int $sector_id, $time)
    {
        $locations =  DB::table('location_history AS lh')
            ->join('sectors_routers AS sr', 'lh.router_id', '=', 'sr.router_id')
            ->select(
                'lh.id',
                'lh.device_id',
                'sr.sector_id',
                'lh.router_id',
                'sr.router_horizontal',
                'sr.router_vertical',
                'lh.distance',
                'lh.created_at'
            )
            ->where('lh.device_id', '=', $deviceId)
            ->where('sr.sector_id', '=', $sector_id)
            ->where('lh.created_at', '=', $time)
            ->whereNull('lh.deleted_at')
            ->orderBy('lh.created_at', 'desc')
            ->orderBy('lh.distance')
            ->get();

        return $this->discoverLocation($locations);
    }

    private function discoverLocation($locationsHistory)
    {
        $router1 = [];
        $router2 = [];
        $router3 = [];

        foreach ($locationsHistory as $locationHistory) {
            if (empty($router1['router_id'])) {
                $router1 = $this->decorateRouter($locationHistory);
                continue;
            }
            if (empty($router2['router_id'])
                && $locationHistory->router_id != $router1['router_id']
            ) {
                $router2 = $this->decorateRouter($locationHistory);
                continue;
            }
            if (empty($router3['router_id'])
                && $locationHistory->router_id != $router1['router_id']
                && $locationHistory->router_id != $router2['router_id']
            ) {
                $router3 = $this->decorateRouter($locationHistory);
                break;
            }
        }

        return $this->findLocation($router1, $router2, $router3);
    }

    private function decorateRouter($locationHistory)
    {
        $router['router_id'] = $locationHistory->router_id;
        $router['sector_id'] = $locationHistory->sector_id;
        $router['horizontal'] = $locationHistory->router_horizontal;
        $router['vertical'] = $locationHistory->router_vertical;
        $router['distance'] = $locationHistory->distance;
        $router['time'] = $locationHistory->created_at;

        return $router;
    }

    private function findLocation(array $router1, array $router2, array $router3)
    {
        $devicePosition = [
            'horizontal' => 0,
            'vertical' => 0,
            'sector_id' => 0,
            'time' => '',
            'duration' => '',
        ];

        if (empty($router1)
            || empty($router2)
            || empty($router3)
        ) {
            return $devicePosition;
        }

        // calculate the location of the device based on the 3 routers location and distance
        $A = 2*$router2['horizontal'] - 2*$router1['horizontal'];
        $B = 2*$router2['vertical'] - 2*$router1['vertical'];
        $C = pow($router1['distance'], 2)
            - pow($router2['distance'], 2)
            - pow($router1['horizontal'], 2)
            + pow($router2['horizontal'], 2)
            - pow($router1['vertical'], 2)
            + pow($router2['vertical'], 2)
        ;
        $D = 2*$router3['horizontal'] - 2*$router2['horizontal'];
        $E = 2*$router3['vertical'] - 2*$router2['vertical'];
        $F = pow($router2['distance'], 2)
            - pow($router3['distance'], 2)
            - pow($router2['horizontal'], 2)
            + pow($router3['horizontal'], 2)
            - pow($router2['vertical'], 2)
            + pow($router3['vertical'], 2)
        ;

        // finding the x and y of the device
        $devicePosition['horizontal'] = (($C * $E) - ($F * $B)) / (($E * $A) - ($B * $D));
        $devicePosition['vertical'] = (($C * $D) - ($A * $F)) / (($B * $D) - ($A * $E));
        $devicePosition['sector_id'] = $router1['sector_id'];
        $devicePosition['time'] = $router1['time'];
        $devicePosition['duration'] = '';

        return $devicePosition;
    }
}
