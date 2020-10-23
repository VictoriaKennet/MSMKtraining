<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecordSave extends Model
{
    protected $table = 'record_save';

    protected $fillable = [
        'client',
        'data'
    ];
}
