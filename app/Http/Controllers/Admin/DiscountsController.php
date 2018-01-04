<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Discount;
use App\Http\Controllers\CrudController;

class DiscountsController extends CrudController
{
    protected $itemName = 'Discount';
    protected $modelPath = 'App\Discount';//model list data Brand
    protected $viewPrefix = 'admin.discounts';//view find view
    protected $routePrefix = 'discount';//url route link

    protected $itemPerPage = 4;//pagination
    protected $siteTitle = 'Discount'; //tittle
    protected $pageTitle = 'Discount Lists';//
}
