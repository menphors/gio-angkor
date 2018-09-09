<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use App\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;
class ProceedOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $products = Cart::content();
        $user = Auth::user();
     // iterate through the products and store them into the database
            //$user->id = $request->input('id');
        foreach($products as $product){
             $data = Order::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'phone' => $request->input('tel'),
                'email' => $request->input('email'),
                'payment_type' => $request->input('payment_type'),
                'payment_code' => $request->input('payment_code'),
                'quantity' => $request->input('quantity'),
                'status_product' => $request->input('status_product'),
                'order_unit_price' => $request->input('order_unit_price'),
                'product_id' => $product->id,
                'user_id' => $user->id,
             ]); 
        }     
             $data->save();
             Cart::destroy();
        return Redirect('order-success');
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
}
