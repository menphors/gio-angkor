<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;
use App\SubCategory;

class SubCategoryController extends CrudController
{

    protected $itemName = 'Sub Category';//error title
    protected $modelPath = 'App\SubCategory';//model list data table paramete model
    protected $viewPrefix = 'admin.subcategory';//view find view
    protected $routePrefix = 'subcategory';//url route link
    protected $itemPerPage = 5;//pagination
    protected $siteTitle = 'Admin - SubCategory'; //tittle
    protected $pageTitle = 'Sub-Category';//
}
