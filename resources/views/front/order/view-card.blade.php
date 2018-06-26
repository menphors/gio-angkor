<?php /**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 4/26/2018
 * Time: 9:56 PM
 */?>
@extends('front.homepages.header')
@section('content')
<div style="height: 70px;"></div>
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3>Your Order</h3>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Item</th>
                      <th scope="col">Products</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Subtotal</th>
                       <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>White Addidas transport shoes</td>
                      <td><input type="number" name="" value="1"></td>
                      <td>140$</td>
                      <td>140$</td>
                    </tr>
                  </tbody>
                </table>
        </div>
        <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item">
                    <span><b>Subtotal:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 140$</span>
                </a>
                <a href="#" class="list-group-item"><span><b>Shipping:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Free shipping</span></a>
                <a href="#" class="list-group-item"><span><b>Total:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;140$</span></a>
                <a href="#" class="list-group-item">
                    <button class="btn btn-danger btn-product btn-block"><span class=""></span>Checkout</button>
                </a>
            </div>
        </div>
    </div>
</div>
@include('front.homepages.footer')
@stop





