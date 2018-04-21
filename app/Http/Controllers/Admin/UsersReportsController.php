<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UsersReport;
use App\User;
use Excel;

class UsersReportsController extends Controller
{
    public function __construct(\Maatwebsite\Excel\Excel $excel)
    {
        $this->excel = $excel;
    }

    public function index() {
        return view('admin.users.users-reports');
    }

    public function export()
    {
        return $this->excel->export(new Export);
    }

    public function export_excel() {

        $users = UsersReport::select('id', 'price', 'product_id', 'user_id','order_id')->get();
        Excel::create('Report Store', function($excel) use($users) {
            $excel->sheet('Sheet 1', function($sheet) use($users) {
                $sheet->fromArray($users);
            });
        })->download('xls');
    }

    public function user_export(){
        $user = User::select('name', 'email', 'address', 'role_id')->get();
        return Excel::create('Report User', function ($excel) use ($user) {
            $excel->sheet('Sheet 1',function($sheet) use ($user){
                $sheet->fromArray($user);

            });
        })->download('xls');
    }
}
