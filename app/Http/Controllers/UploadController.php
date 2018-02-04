<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function  showUpload(){
        return view('upload.upload_form');
    }

    public  function saveUpload (Request $request) {
        $file = $request->file('file_upload');

        //$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $fileName = $file->getClientOriginalName();
        $destinationPath = public_path('/uploads');

        $file->move($destinationPath, $fileName);

    }

}
