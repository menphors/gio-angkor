<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;
use App\Product;

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
        return \View::make('front/order/view-card', compact('cartItems'));
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
        //store user billing address not yet finish
         $this->validate($request, [
            'guest_name' => 'required|max:255',
            'guest_phone' => 'required',
            'guest_email' => 'required',
            'guest_address' => 'required',
          ]);
            $guest = new Guest;
            $guest->name = $request->guest_name;
            $guest->phone = $request->guest_phone;
            $guest->email = $request->guest_email;
            $guest->address = $request->guest_address;
            $guest->payment_method = $request->payment_method;
            $guest->save();

            $cart = new Cart;
            $cartDetails = Cart::content();
            $subtotal = Cart::subtotal();
            foreach($cartDetails as $c){
              $cart->guest_id = $guest->id;
              $cart->products = $c->name;
              $cart->qty = $c->qty;
              $cart->price = $c->price;
              $cart->subtotal = $c->subtotal;
              $cart->save();
            }

            return view('guest/track')->with('msg','Your Order has been placed! You\'ll get an email shortly!');
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
