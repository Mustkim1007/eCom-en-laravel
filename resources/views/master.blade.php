<!DOCTYPE html>
<html>
<head>
	<title>E-comm project</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!--jqry-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
	
	{{View::make('header')}}
	@yield('content')
	<br><br><br><br><br>
	{{View::make('footer')}}	

</body>
<style>
	.custom-login{
		height: 500px;
		padding-top: 100px;
	}
	img.slider-img{
		height: 400px !important
	}
	.custom-product{
		height: 600px;
	    /*background-color: #466346a8;*/
	}
	.slider-text{
	    background-color: #466346a8;
	}
	.tranding-image
	{
		height: 100px;
	}
	.tranding-item
	{
		float: left;
		width: 20%;
	}
	.tranding-wrapper{
		margin: 30px;
	}
	.detail-img{
		height: 200px;
	}
	.container{
		width: 100%;
	}
</style>

</html>