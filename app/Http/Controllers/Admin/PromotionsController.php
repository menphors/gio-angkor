<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;
use App\Promotion;


class PromotionsController extends CrudController
{
    protected $itemName = 'Special Promotion';
    protected $modelPath = 'App\Promotion';
    protected $viewPrefix = 'admin.promotions';
    protected $routePrefix = 'promotions';

    protected $itemPerPage = 4;
    protected $siteTitle = 'Promotion';
    protected $pageTitle = 'Store Promotion';
}
