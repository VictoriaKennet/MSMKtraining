<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentMaterialGroup extends Model
{
    protected $table = 'parent_material_group';
    public $timestamps = false;

    protected $fillable = [
        'test',
        'range',
        'wps_reference_id'
    ];
}
