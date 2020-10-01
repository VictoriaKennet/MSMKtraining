<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetalTransfer extends Model
{
    protected $table = 'doc2_metal_transfer';
    public $timestamps = false;

    protected $fillable = [
        'main'
    ];
}
