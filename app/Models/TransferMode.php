<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransferMode extends Model
{
    protected $table = 'transfer_mode';
    public $timestamps = false;

    protected $fillable = [
        'test',
        'range'
    ];
}
