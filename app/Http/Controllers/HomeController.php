<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1['data'] = DB::table('tbl_category')->get();
        if(Auth::user() &&  Auth::user()->admin == 1){
            return $next($request);
        }else{
            return view('front.user_dashboard.dashboard',$data1);
        }
    }
}
