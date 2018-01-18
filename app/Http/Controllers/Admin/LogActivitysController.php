<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;
use App\LogActivity;

class LogActivitysController extends CrudController
{
    protected $itemName = 'Log Activity';//error title
    protected $modelPath = 'App\LogActivity';//model list data table paramete model
    protected $viewPrefix = 'admin.logactivities';//view find view
    protected $routePrefix = 'log-activity';//url route link

    protected $itemPerPage = 5;//pagination
    protected $siteTitle = 'Admin - Log Activity'; //tittle
    protected $pageTitle = 'Log Activity';//
}
