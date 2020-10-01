<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesignationGasFlux extends Model
{
    protected $table = 'doc2_designation_gas_flux';
    public $timestamps = false;

    protected $fillable = [
        'main',
        'add'
    ];
}
