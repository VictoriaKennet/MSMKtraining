<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeJoin extends Model
{
    protected $table = 'doc2_type_join';
    public $timestamps = false;

    protected $fillable = [
        'main',
        'add'
    ];
}
