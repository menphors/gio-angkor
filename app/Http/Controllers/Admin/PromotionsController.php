<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;
use App\Promotion;
use App\Product;
use App\Brand;
use App\Category;


class PromotionsController extends CrudController
{
    protected $itemName = 'Special Promotion';
    protected $modelPath = 'App\Promotion';
    protected $viewPrefix = 'admin.promotions';
    protected $routePrefix = 'promotions';

    protected $itemPerPage = 4;
    protected $siteTitle = 'Promotion';
    protected $pageTitle = 'Promotions';

    public function __construct() {
        parent::__construct();
        view()->share([
            'product_list' => Product::pluck('pro_name', 'id'),
            //array obj for action controller
            'brand_list' => Brand::pluck('brand_name','id'),
            'category_list'=> Category::pluck('name','id')
        ]);
    }
    
    public function getFilterData($request) {
        $query = Promotion::select();
        if ($request->has('product_id')) {
            $query->where('product_id', $request->get('product_id'));
        }
        if ($request->has('pro_name')) {
            $query->where('pro_name', 'LIKE', '%' . $request->get('pro_name') . '%');
        }
        return $query->paginate($this->itemPerPage);
    }

}
