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
use App\Models\WeldingPosition;
use App\Models\WeldingDetails;
use\App\Models\WeldingProcesses;
use\App\Models\Header;

class DataController extends Controller
{
    function pdfData() {
        $wps = WPSReference::with(
            'weldingProcesses',
            'typeOfWeld',
            'productType',
            'fillerMaterialGroup',
            'fillerMaterialDesignation',
            'parentMaterialGroup',
            'header'
        )->get();
        foreach ($wps as $key => $value) {
            foreach ($value['fillerMaterialDesignation'] as $k => $v) {
                $v['process'] = Process::find($v['process_id']);
            }
        }
        $data = [
            'wps_reference' => $wps,
            'parent_material_group' => ParentMaterialGroup::get(),
            'product_type' => ProductType::get(),
            'transfer_mode' => TransferMode::get(),
            'type_of_weld' => TypeOfWeld::get(),
            'filler_material_group' => FillerMaterialGroup::get(),
            'filler_material_designation' => FillerMaterialDesignation::get(),
            'shielding_gas' => ShieldingGas::get(),
            'type_polarity' => TypePolarity::get(),
            'welding_position' => WeldingPosition::get(),
            'welding_details' => WeldingDetails::get(),
            'welding_processes' => WeldingProcesses::get(),
            'process_data' => Process::get(),
            'header' => Header::get()
        ];
        return response()->json($data);
    }

    function added(Request $request) {
        $data = $request->all();
        $tables = [
            'wps_reference' => new WPSReference(),
            'parent_material_group' => new ParentMaterialGroup(),
            'product_type' => new ProductType(),
            'transfer_mode' => new TransferMode(),
            'type_of_weld' => new TypeOfWeld(),
            'filler_material_group' => new FillerMaterialGroup(),
            'filler_material_designation' => new FillerMaterialDesignation(),
            'shielding_gas' => new ShieldingGas(),
            'type_polarity' => new TypePolarity(),
            'welding_position' => new WeldingPosition(),
            'welding_details' => new WeldingDetails(),
            'welding_processes' => new WeldingProcesses(),
            'process_data' => new Process(),
            'header' => new Header()
        ];
        $response = $tables[$request->table]->create($data);
        return response()->json($response);
    }

    function process() {
        $data = Process::get();
        return response()->json($data);
    }

    function typePolarity() {
        $data = TypePolarity::get();
        return response()->json($data);
    }
    function parentMaterialGroup() {
        $data = ParentMaterialGroup::get();
        return response()->json($data);
    }
    function productType() {
        $data = ProductType::get();
        return response()->json($data);
    }
    function transferMode() {
        $data = TransferMode::get();
        return response()->json($data);
    }
    function typeWeld() {
        $data = TypeOfWeld::get();
        return response()->json($data);
    }
    function fillerMaterialGroup() {
        $data = FillerMaterialGroup::get();
        return response()->json($data);
    }
    function fillerMaterialDesignation() {
        $data = FillerMaterialDesignation::get();
        return response()->json($data);
    }
    function shieldingGas() {
        $data = ShieldingGas::get();
        return response()->json($data);
    }
    function weldingPosition() {
        $data = WeldingPosition::get();
        return response()->json($data);
    }
    function weldingDetails() {
        $data = WeldingDetails::get();
        return response()->json($data);
    }
    function weldingProcesses() {
        $data = WeldingProcesses::get();
        return response()->json($data);
    }
    function header() {
        $data = Header::get();
        return response()->json($data);
    }
}
