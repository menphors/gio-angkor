<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;
use App\Category;

class CategoryController extends CrudController
{

    protected $itemName = 'Category';//error title
    protected $modelPath = 'App\Category';//model list data table paramete model
    protected $viewPrefix = 'admin.category';//view find view
    protected $routePrefix = 'category';//url route link
    protected $itemPerPage = 5;//pagination
    protected $siteTitle = 'Admin - Category'; //tittle
    protected $pageTitle = 'Category';//
}
