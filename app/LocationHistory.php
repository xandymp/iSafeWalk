<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationHistory extends Model
{
    use SoftDeletes;

    protected $table = 'location_history';

    protected $fillable = [
        'device_id',
        'sector_id',
    ];

    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id');
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'sector_id');
    }
}
