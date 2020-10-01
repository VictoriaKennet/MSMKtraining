<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FillerMatDesignation extends Model
{
    protected $table = 'doc2_filler_mat_designation';
    public $timestamps = false;

    protected $fillable = [
        'main'
    ];
}
