@extends('master')
@section("content")
   <div class="container">
	<div class="row">
		<div class="col-sm-6">
			<img class="detail-img" src="{{$product['gallery']}}">
		</div>

	    <div class="col-ms-6">
				  <a href="/">Go Back</a>
		    <h2>{{$product['name']}}</h2>
			<h3> Price    : {{$product['price']}}</h3>
			<h4> details   : {{$product['description']}}</h4>
			<h4> Category  : {{$product['category']}}</h4>
			<form action="/add-to-cart" method="POST">
				@csrf
				<input type="hidden" name="product_id" value="{{$product['id']}}">
			<button class="btn btn-primary">Add to Cart</button>
			<button class="btn btn-success">Buy now</button>
			</form>
		</div>
    </div>
</div>
	
@endsection