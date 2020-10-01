<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CodeST extends Model
{
    protected $table = 'doc2_code_st';
    public $timestamps = false;

    protected $fillable = [
        'main'
    ];
}
