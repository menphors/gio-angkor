<?php
/**
 * Created by PhpStorm.
 * User: Soklim
 * Date: 8/19/2018
 * Time: 1:36 PM
 */

namespace App\Http\Controllers\front;


use App\Http\Controllers\Controller;
use DB;
class ContactController extends Controller
{
    public function index()
    {
    	$data1['data'] = DB::table('tbl_category')->get();
        return view('front.contact',$data1);
    }

}