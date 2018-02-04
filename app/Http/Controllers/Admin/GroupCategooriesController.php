<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;


class GroupCategooriesController extends CrudController
{
    protected $itemName = 'Group Category';
    protected $modelPath = 'App\GroupCategory';//model list data Brand
    protected $viewPrefix = 'admin.group_categorys';//view find view
    protected $routePrefix = 'group-category';//url route link
}
