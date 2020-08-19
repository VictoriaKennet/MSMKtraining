<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FillerMaterialDesignation extends Model
{
    protected $table = 'filler_material_designation';
    public $timestamps = false;

    protected $fillable = [
        'wps_reference_id',
        'process_number',
        'process_id'
    ];
}
