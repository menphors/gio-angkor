<?php

namespace App\Http\Controllers\Admin;
use App\StoreReport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class StoreReportsController extends Controller
{
    public function index() {
        $getstorechart = DB::table('tbl_store')
//            ->count()
//            ->groupBy('store_name')
//            ->orderBy('store_name', 'asc')
//            ->get();
        ->select(DB::raw('COUNT(*) as "count",store_name'))
            ->groupBy('store_name')
            ->get();
        return view('admin.store.store',compact('Store report','getstorechart'));
    }
}
