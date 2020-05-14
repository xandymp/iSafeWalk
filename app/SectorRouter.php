<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class SectorRouter extends Pivot
{
    protected $table = 'sectors_routers';

    protected $fillable = [
        'sector_id',
        'device_id',
        'router_horizontal',
        'router_vertical',
    ];
}
