<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;

class AccountController extends CrudController
{
    protected $itemName = 'Brand';
    protected $modelPath = 'App\User';//model list data Brand
    protected $viewPrefix = 'admin.accounts';//view find view
    protected $routePrefix = 'user-account';//url route link

    protected $itemPerPage = 4;//pagination
    protected $siteTitle = 'Create User'; //tittle
    protected $pageTitle = 'User Account';//
}
