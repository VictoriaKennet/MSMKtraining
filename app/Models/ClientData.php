<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientData extends Model
{
    protected $table = 'client_data';

    protected $fillable = [
        'photo',
        'name',
        'identification',
        'employer',
        'testing_standard',
        'job_knowledge',
        'test_ref',
        'lr_control',
        'wps_data',
        'document_number_1',
        'document_number_2',
        'visual_examination',
        'transverse_bends',
        'specimen_macro',
        'transverse_side',
        'ultrasonic_examination',
        'withenessed_name',
        'withenessed_position',
        'withenessed_date',
        'behaulf_name',
        'behaulf_position',
        'behaulf_date',
        'transfer_mode',
        'shielding_gas',
        'type_polarity',
        'welding_position',
        'welding_details'
    ];
}
