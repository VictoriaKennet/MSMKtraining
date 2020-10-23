<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use\App\Models\ClientData;
use\App\Models\RecordSave;

class ClientController extends Controller
{
    function getClients() {
        $certificate = ClientData::get();
        foreach ($certificate as $key => $value) {
            $value['wps'] = json_decode($value['wps']);
            $value['create_date'] = Carbon::parse($value['created_at'])->format('d.m.Y');
            $value['update_date'] = Carbon::parse($value['updated_at'])->format('d.m.Y');
        }
        $records = RecordSave::get();
        foreach ($records as $key => $value) {
            $value['data'] = json_decode($value['data']);
            $value['create_date'] = Carbon::parse($value['created_at'])->format('d.m.Y');
            $value['update_date'] = Carbon::parse($value['updated_at'])->format('d.m.Y');
        }
        return response()->json([
            "certificate" => $certificate,
            "records" => $records
        ]);
    }
    function getClientId($id) {
        $data = ClientData::find($id);
        $data['wps'] = json_decode($data['wps']);
        $data['client'] = json_decode($data['client']);
        return response()->json($data);
    }
    // save WPS
    function saveClient(Request $request) {
        $data = $request->all();
        $data['wps'] = json_encode($data['wps']);
        $data['client'] = json_encode($data['client']);
        $client = new ClientData();
        $client->create($data);
        return response('ok', 200);
    }

    // save Record
    function saveRecord(Request $request) {
        $data = $request->all();
        $data['data'] = json_encode($data['data']);
        $data['client'] = json_encode($data['client']);
        $client = new RecordSave();
        $client->create($data);
        return response('ok', 200);
    }
    // get Record Id
    function recordId($id) {
        $data = RecordSave::find($id);
        $data['data'] = json_decode($data['data']);
        $data['client'] = json_decode($data['client']);
        return response()->json($data);
    }
    // update Record
    function updateRecord(Request $request, $id) {
        $data = $request->all();
        $data['data'] = json_encode($data['data']);
        $data['client'] = json_encode($data['client']);
        RecordSave::find($id)->update($data);
        return response('ok', 200);
    }
    // delete Record
    function deleteRecord($id) {
        RecordSave::find($id)->delete();
        return response('ok', 200);
    }

    function updateClient(Request $request, $id) {
        $data = $request->all();
        $data['wps'] = json_encode($data['wps']);
        $data['client'] = json_encode($data['client']);
        ClientData::find($id)->update($data);
        return response('ok', 200);
    }
    function delClient($id) {
        ClientData::find($id)->delete();
        return response('ok', 200);
    }
}
