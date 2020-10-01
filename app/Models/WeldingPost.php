<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeldingPost extends Model
{
    protected $table = 'doc2_welding_post';
    public $timestamps = false;

    protected $fillable = [
        'main',
        'add'
    ];
}
