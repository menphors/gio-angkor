<?php

namespace App\Http\Controllers\front;


use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('front.about');
    }
}
