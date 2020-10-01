<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeldPR extends Model
{
    protected $table = 'doc2_weld_pr';
    public $timestamps = false;

    protected $fillable = [
        'main',
        'add'
    ];
}
