<?php

namespace App\Http\Controllers\Admin;

use App\SettingType;
use App\SettingItem;
use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;

class SettingItemsController extends CrudController
{
    protected $modelPath = 'App\SettingItem';
    protected $viewPrefix = 'settings.items';
    protected $routePrefix = 'setting-items';
    
    protected $itemPerPage = 5;
    protected $siteTitle = 'Admin - Setting Item';
    protected $pageTitle = 'Setting Item';
    
    public function __construct() {
        parent::__construct();
        view()->share([
            'type_list' => SettingType::pluck('name_en', 'id')
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
