<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;

class SettingTypesController extends CrudController
{
    protected $itemName = 'setting_type';
    protected $listName = 'setting_types';
    protected $modelPath = 'App\SettingType';
    protected $viewPrefix = 'settings.types';
    protected $routePrefix = 'setting-types';
    
    protected $itemPerPage = 1;
    protected $siteTitle = 'Admin - Setting Type';
    protected $pageTitle = 'Setting Type';
    
    public function __construct() {
        parent::__construct();
    }
}
