<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function  showUpload(){
        $data1['data'] = DB::table('tbl_category')->get();
        return view('upload.upload_form',$data1);
    }

    public  function saveUpload (Request $request) {
        $file = $request->file('file_upload');
        //validation file image
        $this->validate($request, [
            'file_upload' => 'image|mimes:jpeg,bmp,png|size:5000'
        ]);

        //$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        //get original name
        $fileName = $file->getClientOriginalName();
        //file distination
        $destinationPath = public_path('/uploads');
        //move fie and name
        $file->move($destinationPath, $fileName);

    }

}
