<?php
use App\Http\Controllers\CrudController;
use App\Order;
use App\Product;
use App\User;
use App;

class OrdersController extends CrudController
{
    protected $itemName = 'Order';
    protected $modelPath = 'App\Order';
    protected $viewPrefix = 'admin.orders';
    protected $routePrefix = 'order';

    protected $itemPerPage = 4;
    protected $siteTitle = 'order';
    protected $pageTitle = 'Order';
    // public function __construct() {
    //     parent::__construct();
    //     view()->share([
    //         'order_list' => Order::pluck('id'),
    //         'product_list'=> Product::pluck('pro_name','id'),
    //         'user_list'=> User::pluck('username','email','id'),
    //         //array obj for action controller
    //     ]);
    // }
    // //search product function
    //   public function getFilterData($request) {
    //     $query = Order::select();
    //     if ($request->has('id')) {
    //         $query->where('id', $request->get('id'));
    //     }
    //     if ($request->has('id')) {
    //         $query->where('id', 'LIKE', '%' . $request->get('id') . '%');
    //     }
    //     return $query->paginate($this->itemPerPage);
    // }
}

