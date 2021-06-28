<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Comic extends Model
{
    //
    /* in caso di utilizzo di fill */

    protected $fillable = [
        'title',
        'description',
        'image',
        'price',
        'series',
        'sale_date',
        'type',
        'slug'
    ];

}
