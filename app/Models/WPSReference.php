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
        return $this->hasOne('App\Models\WeldingProcesses', 'id');
    }

    function typeOfWeld() {
        return $this->hasOne('App\Models\TypeOfWeld', 'id');
    }

    function productType() {
        return $this->hasOne('App\Models\ProductType', 'id');
    }

    function fillerMaterialGroup() {
        return $this->hasOne('App\Models\FillerMaterialGroup', 'id');
    }

    function fillerMaterialDesignation() {
        return $this->hasOne('App\Models\FillerMaterialDesignation', 'id');
    }

    function parentMaterialGroup() {
        return $this->hasOne('App\Models\ParentMaterialGroup', 'id');
    }
}
