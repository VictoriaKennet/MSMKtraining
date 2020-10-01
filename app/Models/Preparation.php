<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preparation extends Model
{
    protected $table = 'doc2_preparation';
    public $timestamps = false;

    protected $fillable = [
        'main'
    ];
}
