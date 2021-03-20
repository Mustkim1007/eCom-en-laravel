@extends('master')
@section("content")
<div class="container">
	<div class="custom-product">
        <div class="col-sm-4">
        	<a href="#">Fillter</a>
        </div>
        <div class="col-sm-4">
        	<div class="tranding-wrapper">
	  			<h3>Result for Products</h3>
	  			 @foreach($product as $item)
			      <div class="searched-item">
			      	<a href="detail/{{$item['id']}}">
			      		<img class="tranding-image" src="{{$item['gallery']}}">
			      		<div class="">
			        		<h2>{{$item['name']}}</h2>
			        		<h5>{{$item['description']}}</h5>
			      		</div>
			      	</a>
			    </div>
			    @endforeach
			</div>
	    </div>
	</div>	
</div>
@endsection