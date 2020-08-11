<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypePolarity extends Model
{
    protected $table = 'type_polarity';
    public $timestamps = false;

    protected $fillable = [
        'test',
        'range'
    ];
}
