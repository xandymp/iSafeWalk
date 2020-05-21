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
        'length',
        'width',
        'height',
        'zone_id',
        'zone_initial_length',
        'zone_initial_width',
    ];

    public function zone()
    {
        return $this->belongsTo('App\Zone');
    }

    public function routers()
    {
        return $this->belongsToMany('App\Router')
            ->using('App\SectorRouter');
    }
}
