<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sector extends Model
{
    use SoftDeletes;

    protected $table = 'sectors';

    protected $fillable = [
        'name',
        'horizontal',
        'vertical',
    ];

    public function routers()
    {
        return $this->belongsToMany('App\Router')
            ->using('App\SectorRouter');
    }
}
