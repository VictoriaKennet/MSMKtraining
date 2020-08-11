<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeldingDetails extends Model
{
    protected $table = 'welding_details';
    public $timestamps = false;

    protected $fillable = [
        'test',
        'range'
    ];
}
