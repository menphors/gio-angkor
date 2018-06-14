<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StorepageController extends Controller
{
    //
    public function index(){
        return view('front.pro_detail.product-detail');
    }
}
