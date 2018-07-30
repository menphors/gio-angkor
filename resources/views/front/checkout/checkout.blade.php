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
                    <form role="form" action="" method="post">
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-6 col-md-offset-3">
                                <div class="col-md-12">
                                    <h3>Billing Detail</h3>
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Last Name</label>
                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Phone</label>
                                        <input type="text" name=""required="required" class="form-control" placeholder="Enter your phone" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter your email" />
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
                                          <th scope="col">Item</th>
                                          <th scope="col">Products</th>
                                          <th scope="col">Subtotal</th>
                                           <th scope="col">Total</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">x1</th>
                                          <td>White Addidas transport shoes</td>
                                          <td>140$</td>
                                          <td>140$</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <h3>Cash on Delivery</h3>
                                    <p>1. Paid by Wing Account: 00000001</p>
                                    <p>2. Paid by Truemoney Account: 00005555</p>
                                    <p>3. Paid by ABA Account: 00003575</p>
                                    <p>4. Paid by Phone: 016984476</p>
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
                                        <select maxlength="200" type="select" required="required" class="form-control">
                                            <option value="">[--Please select--]</option>
                                            <option value="aba">1. Pay By ABA Bank</option>
                                            <option value="wing">2. Pay By Wing</option>
                                            <option value="truemoney">3. Pay By Truemoney</option>
                                            <option value="truemoney">Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Payment Code</label>
                                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="e.g Wing 12345678"  />
                                    </div>
                                    <div class="form-group">
                                       
                                        <input type="checkbox" name="term_and_condition"> I already agree with term and condition. We will use your order privacy to do order processing
                                    </div>
                                    <button class="btn btn-success btn-lg pull-right" type="submit">Place order</button>
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





