<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_type';
    public $timestamps = false;

    protected $fillable = [
        'test',
        'range'
    ];
}
