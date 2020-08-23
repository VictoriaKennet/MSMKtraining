<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Models\ClientData;

class ClientController extends Controller
{
    function getClients() {
        $data = ClientData::get();
        return response()->json($data);
    }
    function saveClient(Request $request) {
        $data = $request->all();
        $data['wps_data'] = json_encode($request->wps_data);
        $data['transfer_mode'] = json_encode($request->transfer_mode);
        $data['shielding_gas'] = json_encode($request->shielding_gas);
        $data['type_polarity'] = json_encode($request->type_polarity);
        $data['welding_position'] = json_encode($request->welding_position);
        $data['welding_details'] = json_encode($request->welding_details);
        $client = new ClientData();
        $client->create($data);
        return response('ok', 200);
    }
}
