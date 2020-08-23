<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeldingProcesses extends Model
{
    protected $table = 'welding_processes';
    public $timestamps = false;

    protected $fillable = [
        'test',
        'range'
    ];
}
