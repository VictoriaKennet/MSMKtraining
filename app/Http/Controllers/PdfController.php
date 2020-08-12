<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    function createPDF(Request $request) {
        $data = $request;
        if(isset($request->photo)) {
            $data['photo'] = "data:image/".$request['photo']->getClientOriginalExtension().";base64,".base64_encode(file_get_contents($request['photo']));
        }
        $pdf = PDF::loadView('pdf.test', ['data' => $data]);
        return $pdf->stream('test.pdf');
    }
}
