<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Level;
use App\Http\Controllers\CrudController;

class LevelsController extends CrudController
{
    protected $itemName = 'Level';// for listing that name in view while it is success
    protected $modelPath = 'App\Level';//model list data table paramete model
    protected $viewPrefix = 'admin.levels';//view find view
    protected $routePrefix = 'level-lists';//url route link

    protected $itemPerPage = 4;//pagination
    protected $siteTitle = 'Level'; //tittle
    protected $pageTitle = ' Level listing';//
}
