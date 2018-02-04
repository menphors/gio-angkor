<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;
use App\Tracking;

class TrackingsController extends CrudController
{
    protected $itemName = 'Tracking';
    protected $modelPath = 'App\Tracking';
    protected $viewPrefix = 'admin.tracks';
    protected $routePrefix = 'tracking';

    protected $itemPerPage = 4;
    protected $siteTitle = 'Tracking Gio';
    protected $pageTitle = 'Tracking listing';
}
