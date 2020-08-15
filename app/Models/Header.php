<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $table = 'header';
    public $timestamps = false;

    protected $fillable = [
        'test',
        'range',
        'wps_reference_id'
    ];
}
