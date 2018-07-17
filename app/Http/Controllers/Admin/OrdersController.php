<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;
use App\Order;

class OrdersController extends CrudController
{
    protected $itemName = 'Order';
    protected $modelPath = 'App\Order';
    protected $viewPrefix = 'admin.orders';
    protected $routePrefix = 'order-lists';

    protected $itemPerPage = 4;
    protected $siteTitle = 'order';
    protected $pageTitle = 'Order';
}

