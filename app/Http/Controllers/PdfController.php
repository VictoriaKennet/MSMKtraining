<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
class PdfController extends Controller
{
    protected $fileStorage = 'upload/';

    function createPDF(Request $request) {
        $data = $request;
        if(file_exists(public_path().'/'.$this->fileStorage.'/photo_min.png')) {
            $data['photo'] = public_path().'/'.$this->fileStorage.'/photo_min.png';
        }
        $pdf = PDF::loadView('pdf.test', ['data' => $data]);
        return $pdf->stream('test.pdf');
    }

    function img() {
        if(isset($_POST['photo'])) {
            $arr = [];
            if($_POST['photo']) {
                $file = 'photo_min.png';
                $uploadfile = $this->fileStorage . $file;

                $img = str_replace('data:image/png;base64,', '', $_POST['photo']);
                $img = str_replace(' ', '+', $img);
                $fileData = base64_decode($img);

                file_put_contents(public_path().'/'.$uploadfile, $fileData);
                $this->compressImage(public_path().'/'.$this->fileStorage.'/photo_min.png', "upload/" . 'photo_min.png', 80);

                $arr['status'] = 'success';
                $arr['path_mini'] = 'http://'.$_SERVER['HTTP_HOST'].'/'.$uploadfile;
                $arr['file_mini'] = $file;
            }
        }
        else {
            $uploadfile = $this->fileStorage . 'photo_original.png';
            $arr = array();
            if (move_uploaded_file($_FILES['file']['tmp_name'], public_path().'/'.$uploadfile)) {
                $arr['status'] = 'success';
                $arr['path_max'] = 'http://'.$_SERVER['HTTP_HOST'].'/'.$uploadfile;
                $arr['file_max'] = $_FILES['file']['name'];
            } else {
               $arr['status'] = 'fail';
            }
        }
        header('Content-type: application/json');
        return response()->json($arr);
    }

    function compressImage($source_url, $destination_url, $quality) {
        $info = getimagesize($source_url);
        if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
        elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
        elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
        imagejpeg($image, $destination_url, $quality);
    }
}
