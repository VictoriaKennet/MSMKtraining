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

    function addedWPS(Request $request) {
        $wps = new WPSReference();
        $newWPS = $wps->create([
            'name' => $request->name
        ]);

        $parentMaterialGroup = new ParentMaterialGroup();
        $parentMaterialGroup->create([
            'test' => $request->parent_material_group['test'],
            'range' => $request->parent_material_group['range'],
            'wps_reference_id' => $newWPS->id
        ]);

        $productType = new ProductType();
        $productType->create([
            'test' => $request->product_type['test'],
            'range' => $request->product_type['range'],
            'wps_reference_id' => $newWPS->id
        ]);

        $typeOfWeld = new TypeOfWeld();
        $typeOfWeld->create([
            'test' => $request->type_of_weld['test'],
            'range' => $request->type_of_weld['range'],
            'wps_reference_id' => $newWPS->id
        ]);

        $fillerMaterialGroup = new FillerMaterialGroup();
        $fillerMaterialGroup->create([
            'test' => $request->filler_material_group['test'],
            'range' => $request->filler_material_group['range'],
            'wps_reference_id' => $newWPS->id
        ]);

        $fillerMaterialDesignation = new FillerMaterialDesignation();
        $process = new Process();
        foreach ($request->filler_material_designation as $key => $value) {
            $processId = null;
            if(Process::where('test', $value['process']['test'])->where('range', $value['process']['range'])->exists()) {
                $processId = Process::where('test', $value['process']['test'])->where('range', $value['process']['range'])->first()->id;
            } else {
                $newProcess = $process->create([
                    'test' => $value['process']['test'],
                    'range' => $value['process']['range'],
                ]);
                $processId = $newProcess->id;
            }
            $fillerMaterialDesignation->create([
                'process_number' => $value['process_number'],
                'process_id' => $processId,
                'wps_reference_id' => $newWPS->id
            ]);
        }

        $weldingProcesses = new WeldingProcesses();
        $weldingProcesses->create([
            'test' => $request->welding_processes['test'],
            'range' => $request->welding_processes['range'],
            'wps_reference_id' => $newWPS->id
        ]);

        $header = new Header();
        $header->create([
            'test' => $request->header['test'],
            'range' => $request->header['range'],
            'wps_reference_id' => $newWPS->id
        ]);

        return response()->json("ok");
    }
}
