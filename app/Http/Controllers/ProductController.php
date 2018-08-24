<?php

namespace App\Http\Controllers;

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
    public function show($id)
    {
        //

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
            ->get();
        $data1['data'] = DB::table('tbl_category')->get();
        return view('front.products.index',$data1)->with('products',$products);
    }

}
