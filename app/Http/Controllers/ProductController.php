<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product as Products;
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
        $data = [];
        $data["title"]="Product Page";
        return view("products.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
        return view("
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
    public function insert(Request $request)
    {
        // $pro_name = $request->input('pro_name');
        // $model = $request->input('model');
        // $category = $request->input('category');
        // $data = array ('pro_name'=>$pro_name, 'model'=>$model, 'category'=>$category);

        // $data = DB::table('tbl_products')->insert($data);
       $data = new Products;
       $data->pro_code = $request->input('pro_code');
       $data->pro_name = $request->input('pro_name');
       $data->brand = $request->input('brand');
       $data->model = $request->input('model');
       $data->category = $request->input('category');
       $data->price = $request->input('price');
       $data->color = $request->input('color');
       $data->gallery = $request->input('gallery');
       $data->promotion = $request->input('promotion');
       $data->publish = $request->input('publish');
       $data->desc = $request->input('desc');

       $data->save();
        
        return view('products.index');
                //DB::table('tbl_products')->get();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

      //$data = Products::table('products')->get();
        $data = Products::orderBy('id','ASC' )->get();
        return view('products.view_product', ['products' => $data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::where('id', '=',$id)->get();

        return view('products.edit_product')->with('products', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Products $products )
    {
        request()->validate([
            'pro_name' => 'required',
            'pro_code' => 'required',
        ]);
        $products->update($request->all());
        return redirect()->route('products.view_product')
            ->with('success','Member updated successfully');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    public function destroy($id){
        $data = Products::findOrFail($id);
        $data->where('id', '=', $id)->delete();
        return redirect('show');
    }
}
