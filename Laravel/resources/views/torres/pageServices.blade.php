@extends('home')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		iframe#services{
			position: absolute;
			width: 95%;
			height: 620px;
			top: 320px;
			left: 30px;
			border: none;
			
		}
	</style>
</head>
<body>
<iframe id="services" name="service" src="{{url('/services')}}"></iframe>
	
	
</body>
@endsection
</html>