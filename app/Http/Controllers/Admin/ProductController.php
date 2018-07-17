<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;
use App\Product;
use App\Promotion;
use App\Brand;
use App\Category;
use App\SettingType;
use App\SettingItem;

class ProductController extends CrudController
{
    protected $itemName = 'View Product';
    protected $modelPath = 'App\Product';
    protected $viewPrefix = 'admin.products';
    protected $routePrefix = 'products';

    protected $itemPerPage = 4;
    protected $siteTitle = 'Product listing';
    protected $pageTitle = 'Products';
    public function __construct() {
        parent::__construct();
        view()->share([
            'brand_list' => Brand::pluck('brand_name', 'id'),
            //array obj for action controller
            'category_list'=> Category::pluck('name','id'),
            'promotion_list'=> Promotion::pluck('promotion_name','id'),
            'settingtype_list'=> SettingType::pluck('name','id'),
            'settingitem_list'=> SettingItem::pluck('name','id'),
            'product_list'=> Product::pluck('pro_name','id'),
        ]);
    }
    //search product function
      public function getFilterData($request) {
        $query = Product::select();
        if ($request->has('id')) {
            $query->where('id', $request->get('id'));
        }
        if ($request->has('pro_name')) {
            $query->where('pro_name', 'LIKE', '%' . $request->get('pro_name') . '%');
        }
        return $query->paginate($this->itemPerPage);
    }


}
