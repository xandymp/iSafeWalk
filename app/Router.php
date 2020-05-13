<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Router extends Model
{
    use SoftDeletes;

    protected $table = 'routers';

    protected $fillable = [
        'name',
        'serial',
    ];

    public function sectors()
    {
        return $this->belongsToMany('App\Sector')
            ->using('App\SectorRouter');
    }
}
