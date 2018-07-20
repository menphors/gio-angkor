<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;
use App\SubCategory;
use App\Category;
use App\GroupCategory;

class SubCategoryController extends CrudController
{

    protected $itemName = 'Sub Category';//error title
    protected $modelPath = 'App\SubCategory';//model list data table paramete model
    protected $viewPrefix = 'admin.subcategory';//view find view
    protected $routePrefix = 'subcategory';//url route link
    protected $itemPerPage = 5;//pagination
    protected $siteTitle = 'Admin - SubCategory'; //tittle
    protected $pageTitle = 'Sub-Category';//

    public function __construct() {
        parent::__construct();
        view()->share([
            'category_list'=> Category::pluck('name','id'),
            'group_list' => GroupCategory::pluck('group_cat_name','id'),
        ]);
    }
}
