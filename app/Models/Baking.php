<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Baking extends Model
{
    protected $table = 'doc2_baking';
    public $timestamps = false;

    protected $fillable = [
        'main'
    ];
}
