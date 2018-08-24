<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class TermConditionController extends Controller
{
    public function index()
    {
    	$data1['data'] = DB::table('tbl_category')->get();
        return view('front.term_condition',$data1);
    }
}
