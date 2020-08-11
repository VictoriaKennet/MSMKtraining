<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShieldingGas extends Model
{
    protected $table = 'shielding_gas';
    public $timestamps = false;

    protected $fillable = [
        'test',
        'range'
    ];
}
