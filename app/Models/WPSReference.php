<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WPSReference extends Model
{
    protected $table = 'wps_reference';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'welding_processes_id',
        'type_weld_id',
        'product_type_id',
        'filler_material_group_id',
        'process_1_id',
        'process_2_id',
        'parent_material_group_id',
        'header_id'
    ];

    function weldingProcesses() {
        return $this->belongsTo('App\Models\WeldingProcesses', 'welding_processes_id');
    }

    function typeOfWeld() {
        return $this->belongsTo('App\Models\TypeOfWeld', 'type_weld_id');
    }

    function productType() {
        return $this->belongsTo('App\Models\ProductType', 'product_type_id');
    }

    function fillerMaterialGroup() {
        return $this->belongsTo('App\Models\FillerMaterialGroup', 'filler_material_group_id');
    }

    function processOne() {
        return $this->belongsTo('App\Models\Process', 'process_1_id');
    }

    function processTwo() {
        return $this->belongsTo('App\Models\Process', 'process_2_id');
    }

    function parentMaterialGroup() {
        return $this->belongsTo('App\Models\ParentMaterialGroup', 'parent_material_group_id');
    }

    function header() {
        return $this->belongsTo('App\Models\Header', 'header_id');
    }
}
