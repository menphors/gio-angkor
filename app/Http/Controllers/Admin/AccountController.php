<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;

class AccountController extends CrudController
{
    protected $itemName = 'User';
    protected $modelPath = 'App\User';//model list data Brand
    protected $viewPrefix = 'admin.accounts';//view find view
    protected $routePrefix = 'user-account';//url route link

    protected $itemPerPage = 8;//pagination
    protected $siteTitle = 'Create User'; //tittle
    protected $pageTitle = 'User Account';//

    public function __construct() {
        parent::__construct();
        view()->share([
            'level_list' => Level::pluck('level_name', 'id'),
        ]);
    }
}
