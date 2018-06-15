<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;

class SettingTypesController extends CrudController
{
    protected $itemName = 'Setting type';
    protected $modelPath = 'App\SettingType';
<<<<<<< HEAD
    protected $viewPrefix = 'admin.settings.types';
=======
    protected $viewPrefix = 'settings.types';
>>>>>>> origin/master
    protected $routePrefix = 'setting-types';
    
    protected $itemPerPage = 4;
    protected $siteTitle = 'Admin - Setting Type';
    protected $pageTitle = 'Setting Type';
    
    public function __construct() {
        parent::__construct();
    }
}
