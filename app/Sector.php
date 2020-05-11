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

    public function router()
    {
        return $this->hasMany(Router::class, 'sector_id', 'id');
    }
}
