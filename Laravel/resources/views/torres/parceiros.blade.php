@extends('home')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Parceiros</title>
	<style type="text/css">
		table.photo {
			display: inline-block;
			position: absolute;
			top: 360px;
			left: 170px;
			width: 1000px;
			height: 400px;
		}
		table.photo td{
			position: relative;
			border: none;
			width: 280px;
			height: 170px;
			
		}
		table.photo tr{	
			border: none;
		}
		table.photo img{
			width: 100%;
			height: 100%;
			padding: 8px;
		}

	</style>
</head>
<body>

<table class="photo">
	<tr>
		<td> <img src="image/Aditech.png"> </td>
		<td> <img src="image/Branco Imoveis.png"> </td>
		<td> <img src="image/Edição Extra.jpg"> </td>
		<td> <img src="image/Emisso Facil.png"> </td>
	</tr>
	<tr>
		<td> <img src="image/Gold line.jpg"> </td>
		<td> <img src="image/Gut's.png"> </td>
		<td> <img src="image/obba.jpg"> </td>
		<td> <img src="image/cartao01.jpg"> </td>

	</tr>
	<tr>
		<td> <img src="image/gato.jpeg"> </td>
		<td> <img src="image/tpTransportes.jpeg"> </td>
		<td> <img src="image/betha.jpeg"> </td>
		

	</tr>
</table>

@endsection
</body>
</html>