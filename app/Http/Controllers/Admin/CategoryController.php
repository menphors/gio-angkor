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


    public function testCat() {
        return [
            'AllCategoryWithParent' => Category::with('parent')->get(),
            'AllCategoryWithChildren' => Category::with('children')->get(),
            'ParentsWithChildren' => Category::with('children')->where('parent_id','<=',0)->get(),
            'ParentsWithChildren::allParents' => Category::with('children')->allParents()->get(),
            'ChildrenWithParent' => Category::with('parent')->where('parent_id','>',0)->get(),
            'ChildrenWithParent::allChildren' => Category::with('parent')->allChildren()->get(),
            'Count::allParents' => Category::allParents()->count(),
            'Count::allChildren' => Category::allChildren()->count(),
            'CountAllCategories' => Category::count(),
            'ListAllCategories' => Category::pluck('name', 'id'),
            'ListAllParents' => Category::allParents()->pluck('name', 'id'),
            'ListAllChildren' => Category::allChildren()->pluck('name', 'id'),
        ];
    }
}
