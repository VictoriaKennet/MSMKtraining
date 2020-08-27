<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Models\ClientData;

class ClientController extends Controller
{
    function getClients() {
        $data = ClientData::get();
        foreach ($data as $key => $value) {
            $value['wps'] = json_decode($value['wps']);
        }
        return response()->json($data);
    }
    function getClientId($id) {
        $data = ClientData::find($id);
        $data['wps'] = json_decode($data['wps']);
        $data['client'] = json_decode($data['client']);
        return response()->json($data);
    }
    function saveClient(Request $request) {
        $data = $request->all();
        $data['wps'] = json_encode($data['wps']);
        $data['client'] = json_encode($data['client']);
        $client = new ClientData();
        $client->create($data);
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
