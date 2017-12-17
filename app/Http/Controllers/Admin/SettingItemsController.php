<?php

namespace App\Http\Controllers\Admin;

use App\SettingType;
use App\SettingItem;
use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;

class SettingItemsController extends CrudController
{
    protected $itemName = 'Setting item';
    protected $modelPath = 'App\SettingItem';//model list data table paramete model
    protected $viewPrefix = 'settings.items';//view find view
    protected $routePrefix = 'setting-items';//url route link
    
    protected $itemPerPage = 5;//pagination
    protected $siteTitle = 'Admin - Setting Item'; //tittle
    protected $pageTitle = 'Setting Item';//
    
    public function __construct() {
        parent::__construct();
        view()->share([
            'type_list' => SettingType::pluck('name', 'id')//array obj for action controller
        ]);
    }
    
    public function getFilterData($request) {
        $query = SettingItem::select();
        if ($request->has('type_id')) {
            $query->where('type_id', $request->get('type_id'));
        }
        if ($request->has('code')) {
            $query->where('code', 'LIKE', '%' . $request->get('code') . '%');
        }
        return $query->paginate($this->itemPerPage);
    }
}
