<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\WPSReference;
use App\Models\TransferMode;
use App\Models\TypeOfWeld;
use App\Models\ProductType;
use App\Models\FillerMaterialGroup;
use App\Models\FillerMaterialDesignation;
use App\Models\Process;
use App\Models\TypePolarity;
use App\Models\ShieldingGas;
use App\Models\ParentMaterialGroup;

class DataController extends Controller
{
    function wps() {
        $data = WPSReference::with(
            'weldingProcesses',
            'typeOfWeld',
            'productType',
            'fillerMaterialGroup',
            'fillerMaterialDesignation',
            'parentMaterialGroup'
        )->get();
        foreach ($data as $key => $value) {
            $value['fillerMaterialDesignation']['process'] = Process::find($value['fillerMaterialDesignation']['process_id']);
        }
        return response()->json($data);
    }

    function transferMode() {
        $data = TransferMode::get();
        return response()->json($data);
    }

    function process() {
        $data = Process::get();
        return response()->json($data);
    }

    function typePolarity() {
        $data = TypePolarity::get();
        return response()->json($data);
    }

    function shieldingGas() {
        $data = ShieldingGas::get();
        return response()->json($data);
    }
}
