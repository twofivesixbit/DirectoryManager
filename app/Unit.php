<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
    	'name', 'location'
    ];

    public $timestamps = false;
}
