@extends('home')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body >
	<figure class="center">
		<a href="/pageServices"><img id="center" src="image/conhecaNossosServicos.jpg" >
		<h4> Conheça os nossos serviços </h4></a>
		<a href="/proposalCreate"><img id="center1" src="image/proposta.png" >
		<h4 id="center1"> Solicite sua Proposta </h4></a>
	</figure>

	<div class="iframe">
		<iframe id="receita"  width="800" height="900" scrolling="no" src="http://idg.receita.fazenda.gov.br/"> </iframe> 
		<a id="linkId"  target="_blank" href="http://idg.receita.fazenda.gov.br/"><img id="imgFrame"></a>
	</div>

	
	<div class="links">
	<ul>
		<p>Links utéis</p>

			<a href="http://idg.receita.fazenda.gov.br/" target="_blank"><li> Receita Federal</li></a>
			<a href="http://www.fazenda.df.gov.br/" target="_blank"><li> Secretaria de Fazenda-DF</li></a>
			<a href="http://www.pgfn.fazenda.gov.br/" target="_blank"><li> Procuradoria PGFN</li></a>
			<a href="http://www.crcdf.org.br/crcdf/" target="_blank"><li> CRC-DF</li></a>
			<a href="http://www.sescondf.org.br/" target="_blank"><li> SESCON-DF</li></a>
			<a href="https://rle.empresasimples.gov.br/rle/" target="_blank"><li> Registro e Licenciamento de Empresa</li></a>
			<a href="http://www.portaldoempreendedor.gov.br/" target="_blank"><li> Portal do Empreendedor</li></a>
			<a href="http://multilex.com.br/" target="_blank"><li>Multiflex</li></a>
			<a href="http://www.econeteditora.com.br/" target="_blank"><li>Econet</li></a>
	</ul>
		 
	</div>


	@endsection
	 
</body>
</html>
