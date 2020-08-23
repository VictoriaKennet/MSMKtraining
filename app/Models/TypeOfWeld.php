<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeOfWeld extends Model
{
    protected $table = 'type_weld';
    public $timestamps = false;

    protected $fillable = [
        'test',
        'range'
    ];
}
