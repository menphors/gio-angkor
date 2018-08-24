<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;
use App\Product;
use DB;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = Cart::content();
        $data1['data'] = DB::table('tbl_category')->get();
        return \View::make('front/order/view-card', compact('cartItems'),$data1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view_cart()
    {
        //view cart while checkout
        // $product = Product::find($id);
        // $name = $product->pro_name;
        // $price = $product->prices;
        // // $cart = Cart::add($id,$name,$price);
        // $cart = Cart::add(['id'=> $id,'name'=>$name,'price'=>$price,'qty'=>1]); 
        // return view('front.checkout.checkout', compact($cart));

        $cartItems = Cart::content();
        return \View::make('front.checkout.checkout', compact('cartItems'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $product = Product::find($id);
        $name = $product->pro_name;
        $price = $product->prices;
        // $cart = Cart::add($id,$name,$price);
        Cart::add(['id'=> $id,'name'=>$name,'price'=>$price,'qty'=>1]); 
        return redirect('cart');
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
}
