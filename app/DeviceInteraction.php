<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeviceInteraction extends Model
{
    use SoftDeletes;

    protected $table = 'device_interactions';

    protected $fillable = [
        'primary_device_id',
        'secondary_device_id',
        'interactions',
    ];
}
