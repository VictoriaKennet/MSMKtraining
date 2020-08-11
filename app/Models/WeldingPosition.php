<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeldingPosition extends Model
{
    protected $table = 'welding_position';
    public $timestamps = false;

    protected $fillable = [
        'test',
        'range'
    ];
}
