<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $table = 'doc2_specification';
    public $timestamps = false;

    protected $fillable = [
        'main'
    ];
}
