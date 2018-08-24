<?php
/**
 * Created by PhpStorm.
 * User: Soklim
 * Date: 8/19/2018
 * Time: 1:36 PM
 */

namespace App\Http\Controllers\front;


use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('front.contact');
    }

}