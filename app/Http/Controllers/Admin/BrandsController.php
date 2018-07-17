<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Brand;
use App\Http\Controllers\CrudController;

class BrandsController extends CrudController
{
    protected $itemName = 'Brand';
    protected $modelPath = 'App\Brand';//model list data Brand
    protected $viewPrefix = 'admin.brands';//view find view
    protected $routePrefix = 'brand-lists';//url route link

    protected $itemPerPage = 4;//pagination
    protected $siteTitle = 'Brand'; //tittle
    protected $pageTitle = 'Brand';//
}
