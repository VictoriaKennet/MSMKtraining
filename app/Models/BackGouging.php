<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BackGouging extends Model
{
    protected $table = 'doc2_back_gouging';
    public $timestamps = false;

    protected $fillable = [
        'main'
    ];
}
