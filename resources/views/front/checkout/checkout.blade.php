<?php /**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 4/26/2018
 * Time: 9:56 PM
 */?>
@extends('front.homepages.header')
@section('content')
<div style="height: 20px;"></div>
<div class="container">
    <div class="stepwizard col-md-offset-3">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-sm-12">
        <div class="col-sm-12">
            <div class="list-group">
                <a href="#" class="list-group-item disabled">
                    Proceed Order
                </a>
                <a href="#" class="list-group-item">
                    <form role="form" action="{{url('billing-address')}}" method="post">
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-6 col-md-offset-3">
                                <div class="col-md-12">
                                    <h3>Billing Detail</h3>
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name" name="first_name" style="height: 30px !important;" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Last Name</label>
                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" name="last_name" style="height: 30px !important;"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Phone</label>
                                        <input type="text" name="tel" required="required" class="form-control" placeholder="Enter your phone" style="height: 30px !important;"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter your email" name="email" style="height: 30px !important;"/>
                                    </div>
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-2">
                            <div class="col-xs-6 col-md-offset-3">
                                <div class="col-md-12">
                                    <h3>Your Order</h3>
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <th scope="col">No</th>
                                          <th scope="col">Products</th>
                                          <th scope="col">Quantity</th>
                                          <th scope="col">Unit Price</th>
                                        </tr>
                                      </thead>
                                        <tbody>
                                        <?php $i=1;?>
                                        @foreach($cartItems as $cartItem)
                                        <tr>
                                          <th scope="row"><?php echo $i++;?></th>
                                          <td>{{ $cartItem->name }}</td>
                                          <td align="center">{{$cartItem->qty }}</td>
                                          <td align="left">${{ $cartItem->price }}</td>
                                          <!-- {{ Cart::total() }} -->
                                    <!--       <td><a href="{{url('remove-cart/'.$cartItem->rowId)}}"><i class="fa fa-trash btn btn-danger"></i></td> -->
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="3"><strong>Subtotal</strong></td>
                                            <td align="right">{{ Cart::subtotal() }} $</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><strong>Totals </strong></td>
                                            <td align="right" style="color: red;">{{ Cart::subtotal() }} $</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <br>
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-3">
                            <div class="col-xs-6 col-md-offset-3">
                                <div class="col-md-12">
                                    <h3> Payment Method</h3>
                                        <div class="form-group">
                                        <label class="control-label">Payment Type</label>
                                        <select maxlength="200" type="select" required="required" class="form-control" name="payment_type" style="height: 30px !important;">
                                            <option value="">[--Please select--]</option>
                                            <option value="aba">1. Pay By ABA Bank</option>
                                            <option value="phone">2. Pay By Phone (016984476)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Payment Code</label>
                                        <input maxlength="200" type="text" required="required" name="payment_code" class="form-control" placeholder="e.g Wing 12345678"  style="height: 30px !important;" min="8"/>
                                    </div>
                                    <div class="form-group">
                                       
                                        <input type="checkbox" name="term_and_condition" id="term_and_condition" value="" required="required"> I already agree with term and condition. We will use your order privacy to do order processing
                                    </div>
                                    <input type="hidden" name="quantity" value="{{$cartItem->qty}}">
                                    <input type="hidden" name="status_product" value="Processing">
                                    <input type="hidden" name="order_unit_price" value="{{ $cartItem->price}}">
                                    {{ csrf_field() }}
                                    <button class="btn btn-success btn-lg pull-right" id="submit" type="submit">Place order</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </a>
            </div>
        </div>
    </div>
</div>
@include('front.homepages.footer')
@stop





