<?php

namespace App\Http\Controllers\front;


use App\Http\Controllers\Controller;
use DB;
class AboutController extends Controller
{
    public function index()
    {
    	$data1['data'] = DB::table('tbl_category')->get();
        return view('front.about',$data1);
    }
}
