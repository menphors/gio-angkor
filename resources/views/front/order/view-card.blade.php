<?php /**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 4/26/2018
 * Time: 9:56 PM
 */?>
@extends('front.homepages.header')
@section('content')
<div style="height: 70px;"></div>
  <div id="updateDiv"></div>
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
                      <th scope="col">Price</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1;?>
                    @foreach($cartItems as $cartItem)
                    <input type="hidden" value="{{ $cartItem->rowId }}" id="rowID{{ $cartItem->id }}">
                    <tr>
                      <th scope="row"><?php echo $i++;?></th>
                      <td>{{ $cartItem->name}}</td>
                      <td><input type="number" name="" value="{{$cartItem->qty}}" id="upCart{{$cartItem->id}}"></td>
                      <td>{{ $cartItem->price}}</td>
                      <td><a href="{{url('remove-cart/'.$cartItem->rowId)}}"><i class="fa fa-trash btn btn-danger"></i></td>
                    </tr>
                    @endforeach
                      <tr>
                          <td colspan="4" align="right"><strong>Subtotal</strong></td>
                          <td align="right">{{ Cart::subtotal() }} $</td>
                      </tr>
                      <tr>
                          <td colspan="4" align="right"><strong>Totals </strong></td>
                          <td align="right" style="color: red;">{{ Cart::subtotal() }} $</td>
                      </tr>
                  </tbody>
                </table>
        </div>
        <br/><br/>
        <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item">
                    <span><b>Subtotal:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ Cart::subtotal() }} $</span>
                </a>
                <a href="#" class="list-group-item"><span><b>Shipping:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Free shipping</span></a>
                <a href="#" class="list-group-item"><span><b>Total:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ Cart::subtotal() }} $</span></a>
                <a href="{{ url('view-card') }}" class="list-group-item">
                    <button class="btn btn-danger btn-product btn-block"><span class=""></span>Checkout</button>
                </a>
            </div>
        </div>
    </div>
</div>
<div style="height: 30px;"></div>
<script src="{{asset('js/jquery.min.js')}}" ></script>
<script type="text/javascript">
  $(document).ready( function () {
    @foreach ($cartItems as $cartItem)
    $('#upCart{{ $cartItem->id }}').on('change keyup', function (){
      var newQty = $('#upCart{{ $cartItem->id }}').val();
      var rowID = $('#rowID{{ $cartItem->id }}').val();

      if(newQty <= 0) {
      alert('Please input valid quantity');
      } else {
        window.location.reload(); 
      $.ajax({
        url:'{{ url("/cart/update/$cartItem->id") }}',
        data:'rowID=' + rowID + '&newQty=' + newQty,
        type:'get',
        dataType:'html',
        success:function (response) {
          //console.log(response);
          $('#updateDiv').html(response);
        }
      });
      }
    });
    @endforeach
  });
</script>
@include('front.homepages.footer')
@stop





