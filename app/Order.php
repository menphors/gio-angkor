<?php

namespace App;

class Order extends CrudModel
{
    // public static $validationRules = [
    //     'order_unit_price'=> 'required||numeric||max:25',
    //     'discount'=>'required||max:25',
    //     'quantity'=> 'required||numeric||max:25'
    // ];
    protected $table = 'tbl_order';//table name
    protected $fillable = ['id', 'order_unit_price', 'discount','quantity', 'order_date','status_product','published','first_name','last_name','email','phone','payment_type','payment_code','user_id','product_id'];
    protected $appends = ['sub_total'];

    public function show_order(){
    	$id = Auth::user();
        $order = Order::FindOrFail($id);
        return view('front.profiles.user',$order);
    }

    // Order belongs to user ( One to many - reverse )
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Order belongs to product
    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Mutator - https://laravel.com/docs/5.6/eloquent-mutators
    public function getSubTotalAttribute($value) {
        return $this->attributes['quantity'] * $this->attributes['order_unit_price'];
    }

}
