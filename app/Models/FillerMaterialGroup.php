<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FillerMaterialGroup extends Model
{
    protected $table = 'filler_material_group';
    public $timestamps = false;

    protected $fillable = [
        'test',
        'range'
    ];
}
