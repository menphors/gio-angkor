<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;
use App\Product;

class ProductController extends CrudController
{
    protected $itemName = 'View Product';
    protected $modelPath = 'App\Product';
    protected $viewPrefix = 'admin.products';
    protected $routePrefix = 'products';

    protected $itemPerPage = 4;
    protected $siteTitle = 'Product listing';
    protected $pageTitle = 'Product Lists';
}
