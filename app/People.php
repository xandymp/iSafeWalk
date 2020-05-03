<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'job_title',
        'device_id',
    ];

    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id');
    }
}
