<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Device extends Model
{
    use SoftDeletes;

    protected $table = 'devices';

    protected $fillable = [
        'name',
        'serial',
    ];

    public function people()
    {
        return $this->hasOne(People::class, 'device_id', 'id');
    }
}
