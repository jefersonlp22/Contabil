@extends('home')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Parceiros</title>
	<style type="text/css">
		div.form-group{
			margin: 10px;
		}
		input#companyNameId{
			width: 400px;
		}
	</style>
</head>
<body>
			<div class="panel panel-default">
				<div class="panel-heading">Fale conosco</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Atenção!</strong> Campos obrigatorios.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/proposal') }}">
						{!! csrf_field() !!}

						<div class="form-group">
							<label class="col-md-4 control-label">Razão Social:</label>
							<div class="col-md-1" >
								<input type="text"  name="companyName" id="companyNameId" placeholder="Obrigatorio">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Tipo de Atividade:</label>
							<div class="col-md-6"  >
								<input type="text"  name="activityType" id="activityTypeId" >
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Endereço:</label>
							<div class="col-md-6">
								<input type="text"  name="address" id="addreesId" >
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">CNPJ:</label>
							<div class="col-md-6">
								<input type="text"  name="cnpj" id="cnpjId" >
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">E-mail:</label>
							<div class="col-md-6">
								<input type="text"  name="email" id="emailId" placeholder="Obrigatorio">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Telefone:</label>
							<div class="col-md-6">
								<input type="text"  name="phone" id="phoneId" placeholder="Obrigatorio">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Qde. Aprox. de NF de Entradas no Mês:</label>
							<div class="col-md-6">
								<input type="text"  name="qtdNFIn" id="qtdNFinId">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Qde. Aprox. de NF de Saidas no Mês:</label>
							<div class="col-md-6">
								<input type="text"  name="qtdNFOut" id="qtdNFoutId" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Nº de Empregados:</label>
							<div class="col-md-6">
								<input type="text"  name="qtdEmployes" id="qtdEmployesId" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Tipo de Tributação:</label>
							<div class="col-md-6">
								<input type="text"  name="typeTaxation" id="typeTaxationId" />
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Enviar</button>	
							</div>
						</div>
					</form>
				</div>
			</div>
		
	

@endsection
</body>
</html>
