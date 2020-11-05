<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\WPSReference;
use App\Models\TransferMode;
use App\Models\TypeOfWeld;
use App\Models\ProductType;
use App\Models\FillerMaterialGroup;
use App\Models\Process;
use App\Models\TypePolarity;
use App\Models\ShieldingGas;
use App\Models\ParentMaterialGroup;
use App\Models\WeldingPosition;
use App\Models\WeldingDetails;
use\App\Models\WeldingProcesses;
use\App\Models\Header;
use\App\Models\DesignationGasFlux;
use\App\Models\ParentMLT;
use\App\Models\TypeJoin;
use\App\Models\WeldingPost;
use\App\Models\WeldPR;
use\App\Models\CodeST;
use\App\Models\MetalTransfer;
use\App\Models\Preparation;
use\App\Models\FillerMatDesignation;
use\App\Models\Baking;
use\App\Models\BackGouging;
use\App\Models\Specification;

class DataController extends Controller
{
    // главная Doc1
    function pdfDataCertificate() {
        $wps = WPSReference::with(
            'weldingProcesses',
            'typeOfWeld',
            'productType',
            'fillerMaterialGroup',
            'processOne',
            'processTwo',
            'parentMaterialGroup',
            'header'
        )->get();
        $process = Process::get();
        $data = [
            'wps_reference' => $wps,
            'parent_material_group' => ParentMaterialGroup::get(),
            'product_type' => ProductType::get(),
            'transfer_mode' => TransferMode::get(),
            'type_of_weld' => TypeOfWeld::get(),
            'filler_material_group' => FillerMaterialGroup::get(),
            'shielding_gas' => ShieldingGas::get(),
            'type_polarity' => TypePolarity::get(),
            'welding_position' => WeldingPosition::get(),
            'welding_details' => WeldingDetails::get(),
            'welding_processes' => WeldingProcesses::get(),
            'process_one' => $process,
            'process_two' => $process,
            'header' => Header::get()
        ];
        return response()->json($data);
    }

    // главная Doc2
    function pdfDataRecord() {
        $data = [
            'designation_gas_flux' => DesignationGasFlux::get(),
            'designation_backing_gas' => DesignationGasFlux::get(),
            'parent_mlt' => ParentMLT::get(),
            'parent_mlt_2' => ParentMLT::get(),
            'joint_type_weld' => TypeJoin::get(),
            'welding_post' => WeldingPost::get(),
            'welding_process' => WeldPR::get(),
            'welding_process_2' => WeldPR::get(),
            'code_standard' => CodeST::get(),
            'metal_transfer' => MetalTransfer::get(),
            'preparation' => Preparation::get(),
            'filler_mat_designation' => FillerMatDesignation::get(),
            'filler_mat_designation_2' => FillerMatDesignation::get(),
            'baking' => Baking::get(),
            'back_gouging' => BackGouging::get(),
            'specification' => Specification::get(),
        ];
        return response()->json($data);
    }

    function wpsId($id) {
        $wps = WPSReference::with(
            'weldingProcesses',
            'typeOfWeld',
            'productType',
            'fillerMaterialGroup',
            'processOne',
            'processTwo',
            'parentMaterialGroup',
            'header'
        )->find($id);
        $process = Process::get();
        $data = [
            'wps_reference' => $wps,
            'parent_material_group' => ParentMaterialGroup::get(),
            'product_type' => ProductType::get(),
            'type_of_weld' => TypeOfWeld::get(),
            'filler_material_group' => FillerMaterialGroup::get(),
            'welding_processes' => WeldingProcesses::get(),
            'process_one' => $process,
            'process_two' => $process,
            'header' => Header::get()
        ];
        return response()->json($data);
    }

    function delWPSId($id) {
        WPSReference::find($id)->delete();
    }

    function editWPSId(Request $request, $id) {
        WPSReference::find($id)->update([
            "name" => $request->name,
            "parent_material_group_id" => $this->checkElement($request->parent_material_group, 'parent_material_group'),
            "product_type_id" => $this->checkElement($request->product_type, 'product_type'),
            "type_weld_id" => $this->checkElement($request->type_of_weld, 'type_of_weld'),
            "filler_material_group_id" => $this->checkElement($request->filler_material_group, 'filler_material_group'),
            "welding_processes_id" => $this->checkElement($request->welding_processes, 'welding_processes'),
            "process_1_id" => $this->checkElement($request->process_one, 'process'),
            "process_2_id" => $this->checkElement($request->process_two, 'process'),
            "header_id" => $this->checkElement($request->header, 'header')
        ]);
        return response()->json("ok");
    }

    function postWPS(Request $request) {
        $wpsReference = new WPSReference();
        $wpsReference->create([
            "name" => $request->name,
            "parent_material_group_id" => $this->checkElement($request->parent_material_group, 'parent_material_group'),
            "product_type_id" => $this->checkElement($request->product_type, 'product_type'),
            "type_weld_id" => $this->checkElement($request->type_of_weld, 'type_of_weld'),
            "filler_material_group_id" => $this->checkElement($request->filler_material_group, 'filler_material_group'),
            "welding_processes_id" => $this->checkElement($request->welding_processes, 'welding_processes'),
            "process_1_id" => $this->checkElement($request->process_one, 'process'),
            "process_2_id" => $this->checkElement($request->process_two, 'process'),
            "header_id" => $this->checkElement($request->header, 'header')
        ]);
        return response("ok", 200);
    }

    function postElement(Request $request) {
        $data = $request->all();
        $tables = [
            'transfer_mode' => new TransferMode(),
            'shielding_gas' => new ShieldingGas(),
            'type_polarity' => new TypePolarity(),
            'welding_position' => new WeldingPosition(),
            'welding_details' => new WeldingDetails(),
        ];
        $response = $tables[$request->table]->create($data);
        return response()->json($response);
    }

    function updateElement(Request $request, $id) {
        $data = $request->all();
        $tables = [
            'transfer_mode' => new TransferMode(),
            'shielding_gas' => new ShieldingGas(),
            'type_polarity' => new TypePolarity(),
            'welding_position' => new WeldingPosition(),
            'welding_details' => new WeldingDetails(),
        ];
        $tables[$request->table]->find($id)->update($data);
        return response('ok', 200);
    }

    function deleteElement(Request $request, $id) {
        $tables = [
            'transfer_mode' => new TransferMode(),
            'shielding_gas' => new ShieldingGas(),
            'type_polarity' => new TypePolarity(),
            'welding_position' => new WeldingPosition(),
            'welding_details' => new WeldingDetails(),
        ];
        $tables[$request->table]->find($id)->delete();
        return response('ok', 200);
    }

    function checkElement($data, $table) {
        $tables = [
            'parent_material_group' => new ParentMaterialGroup(),
            'product_type' => new ProductType(),
            'type_of_weld' => new TypeOfWeld(),
            'filler_material_group' => new FillerMaterialGroup(),
            'welding_processes' => new WeldingProcesses(),
            'process' => new Process(),
            'header' => new Header()
        ];
        $model = $tables[$table];
        $id = null;
        if($model::where('test', $data['test'])->where('range', $data['range'])->exists()) {
            $id = $model::where('test', $data['test'])->where('range', $data['range'])->first()->id;
        } else {
            $new = $model->create([
                'test' => $data['test'],
                'range' => $data['range'],
            ]);
            $id = $new->id;
        }
        return $id;
    }
}
