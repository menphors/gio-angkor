<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Category;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data1['data'] = DB::table('tbl_category')->get();
        $data = [];
        $data["title"]="hello";
        $data["products"]=Product::paginate(2);
        return view("products.index",$data,$data1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProduct($id)
    {
//        $products = DB::table('tbl_products')->paginate(8);
//        $data1['data'] = DB::table('tbl_category')->get();
//        $product = Product::findOrFail($id);
//        $data['product'] = $product;
//        $name = $product->pro_name;
//        // $description = $product->description;
//        return view('front.pro_detail.product-order',['data'=>$data]);

        $data = [
            'data' => Category::get(),
            'products' => Product::paginate(8),
            'product' => Product::findOrFail($id),
        ];

        return view('front.pro_detail.product-order', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function autoComplete(Request $request)
    {
        $term=$request->term;
        $data = Product::where('pro_name','LIKE','%'.$term.'%')
            ->take(10)
            ->get();
        $results=array();
        foreach($data as $key => $v){
            $results[]=['id'=>$v->id,'value'=>$v->pro_name];
        }
        return response()->json($results);

    }
    public function searchResult(Request $request){

        $searchname=$request->input('searchname');
        $searchByCategory=$request->input('searchByCategory');
        $products = Product::where('pro_name','like',"%$searchname%")
            ->where('category_id','like',"%$searchByCategory%")
            ->paginate(8);
        $data1['data'] = DB::table('tbl_category')->get();
        return view('front.products.index',$data1)->with('products',$products);
    }
    public function searchCategory(Request $request){

        $categoryGrid=$request->input('categoryGrid');
        $categoryName=$request->input('categoryName');

        $products = Product::join('tbl_category','tbl_category.id','=','tbl_products.category_id')
            ->where('tbl_products.category_id','like',"%$categoryGrid%")
            ->where('tbl_category.name','LIKE',"%$categoryName%")
            ->paginate(8);

        $data1['data'] = DB::table('tbl_category')
        ->get();
        return view('front.products.product-grid',$data1)->with('products',$products);

    }
}
