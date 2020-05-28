<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationHistory extends Model
{
    use SoftDeletes;

    protected $table = 'location_history';

    protected $fillable = [
        'beacon_id',
        'sector_id',
    ];

    public function beacon()
    {
        return $this->belongsTo(Beacon::class, 'beacon_id');
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'sector_id');
    }
}
