<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use App\Http\Controllers\CrudController;

class GalleriesController extends CrudController
{
    protected $itemName = 'Gallery';
    protected $modelPath = 'App\Gallery';
    protected $viewPrefix = 'admin.galleries';
    protected $routePrefix = 'gallery';

    protected $itemPerPage = 4;
    protected $siteTitle = 'Gallery';
    protected $pageTitle = 'Gallery Main';
}
