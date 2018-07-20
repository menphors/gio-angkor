<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;
use App\GroupCategory;
use App\SubCategory;
use App\Category;

class GroupCategoryController extends CrudController
{
    protected $itemName = 'Group Category';//error title
    protected $modelPath = 'App\GroupCategory';//model list data table paramete model
    protected $viewPrefix = 'admin.groupcategory';//view find view
    protected $routePrefix = 'group-category';//url route link

    protected $itemPerPage = 5;//pagination
    protected $siteTitle = 'Admin - Group Category'; //tittle
    protected $pageTitle = 'Group Category';//

     public function __construct() {
        parent::__construct();
        view()->share([
            'category_list'=> Category::pluck('name','id'),
            'sub_list' => SubCategory::pluck('sub_category_name','id'),
        ]);
    }
}
