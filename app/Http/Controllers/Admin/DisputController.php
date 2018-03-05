<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DisputController extends Controller
{
//    protected $itemName = 'Dispute Menu';
//    protected $modelPath = 'App\Disput';//model list data Brand
//    protected $viewPrefix = 'admin.disput.table';//view find view
//    protected $routePrefix = 'disput';//url route link
    public function index() {
        return view ('admin.disput.disput_view');
    }
}
