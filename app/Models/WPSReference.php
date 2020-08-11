<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WPSReference extends Model
{
    protected $table = 'wps_reference';
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    function weldingProcesses() {
        return $this->hasOne('App\Models\WeldingProcesses', 'wps_reference_id');
    }

    function typeOfWeld() {
        return $this->hasOne('App\Models\TypeOfWeld', 'wps_reference_id');
    }

    function productType() {
        return $this->hasOne('App\Models\ProductType', 'wps_reference_id');
    }

    function fillerMaterialGroup() {
        return $this->hasOne('App\Models\FillerMaterialGroup', 'wps_reference_id');
    }

    function fillerMaterialDesignation() {
        return $this->hasMany('App\Models\FillerMaterialDesignation', 'wps_reference_id');
    }

    function parentMaterialGroup() {
        return $this->hasOne('App\Models\ParentMaterialGroup', 'wps_reference_id');
    }
}
