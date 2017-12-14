@extends('adminlte::page')

@section('title', 'GIO Angkor')

@section('content_header')
    <h1>Add Products</h1>
	<link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
	<script src="{{asset('js/jquery.min.js')}}"></script>
@stop

@section('content')
    <div class="container">
    	<div class="row">
    		<div class="col-lg-4 col-md-4 col-sm-4">
		    	<form class="form-inline" action="/insert" method="post">
		    		{{ csrf_field() }}
		    		<div class="form-group">
						  <label>Product Name:</label>
						  <input type="text" class="form-control" name="pro_name" placeholder="Product Name"><br><br>
						  <label>Product Code:</label>
						  <input type="text" class="form-control" name="pro_code" placeholder="Product Code">
					</div><br><br>

				 	<div class="form-group">
					      <label for="brand">Brand:</label>
					      <select class="form-control" name="brand">
							<option></option>
							<option>Nike</option>
					        <option>Adidas</option>
					        <option>Puma</option>
					        <option>FBT</option>
					      </select>
				  	</div>

				  	<div class="form-group">
					      <label for="cat">Category:</label>
					      <select class="form-control" name="category">
							<option></option>
					        <option>Clothes</option>
					        <option>Watch</option>
					        <option>Shoes</option>
					        <option>Phone</option>
					      </select>
				  	</div>	<br><br>	  		  
					  
				 	<div class="form-group">  
					  <label>Model:</label>
					  <input type="text" class="form-control" id="model" name="model" placeholder="Model"><br><br>
					  <label>Price:</label>
					  <input type="text" class="form-control" id="price" name="price" placeholder="Price"><br><br>
					  <label>Color:</label>
					  <input type="text" class="form-control" id="color" name="color" placeholder="Color"><br><br>
					  <label>Promotion:</label>
					  <input type="text" class="form-control" id="promotion" name="promotion" placeholder="Promotion">
					</div>	<br><br>
				  
				  <div class="form-group">
				    <label>Gallery:</label>
				    <input type="file" class="form-control-file" name="gallery" id="exampleInputFile" aria-describedby="fileHelp">
				    <small id="fileHelp" name="gallery" class="form-text text-muted"></small>
				  </div><br><br>
				  
				  <label>Publish:</label>
				  <input type="text" class="form-control" name="publish"><br><br>

			</div>

		    <div class="col-lg-7 col-md-7 col-sm-7">
		    	<div class="form-group">
		    		<label for="desc">Product Description</label>
		    		<textarea class="form-control" name="desc"></textarea>
		    	</div>
		    	<input type="submit" name="submit" value="Add">
		    </div>

		</div>    	   
		</form>
    </div>
   
@stop

@section('js') 	
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'desc' );
    </script>
@stop

