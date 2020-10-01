<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentMLT extends Model
{
    protected $table = 'doc2_parent_mlt';
    public $timestamps = false;

    protected $fillable = [
        'main',
        'add'
    ];
}
