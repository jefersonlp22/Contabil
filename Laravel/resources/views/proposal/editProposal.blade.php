@extends('app')
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
				<h3 align="center">Editar Proposta</h3>
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

					<form class="form-horizontal" role="form" method="GET" action="/proposal/update/{{$proposal->id}}">

					
						{!! csrf_field() !!}

						<div class="form-group">
							<label class="col-md-4 control-label">Razão Social:</label>
							<div class="col-md-1" >
								<input type="text"  name="companyName" id="companyNameId" value="{{$proposal->companyName}}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Tipo de Atividade:</label>
							<div class="col-md-6"  >
								<input type="text"  name="activityType" id="activityTypeId" value="{{$proposal->activityType}}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Endereço:</label>
							<div class="col-md-6">
								<input type="text"  name="address" id="addreesId" value="{{$proposal->address}}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">CNPJ:</label>
							<div class="col-md-6">
								<input type="text"  name="cnpj" id="cnpjId" value="{{$proposal->cnpj}}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">E-mail:</label>
							<div class="col-md-6">
								<input type="text"  name="email" id="emailId" value="{{$proposal->email}}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Telefone:</label>
							<div class="col-md-6">
								<input type="text"  name="phone" id="phoneId" value="{{$proposal->phone}}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Qde. Aprox. de NF de Entradas no Mês:</label>
							<div class="col-md-6">
								<input type="text"  name="qtdNFIn" id="qtdNFinId" value="{{$proposal->qtdNFIn}}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Qde. Aprox. de NF de Saidas no Mês:</label>
							<div class="col-md-6">
								<input type="text"  name="qtdNFOut" id="qtdNFoutId" value="{{$proposal->qtdNFOut}}" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Nº de Empregados:</label>
							<div class="col-md-6">
								<input type="text"  name="qtdEmployes" id="qtdEmployesId" value="{{$proposal->qtdEmployes}}" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Tipo de Tributação:</label>
							<div class="col-md-6">
								<input type="text"  name="typeTaxation" id="typeTaxationId" value="{{$proposal->typeTaxation}}" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Observações</label>
							<div class="col-md-6">
								<input type="text"  name="Comments" id="CommentsId" value="{{$proposal->comments}}" />
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Atualizar</button>
								<a href="/proposal/destroy/{{$proposal->id}}" class="btn btn-danger">Excluir</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		
	

@endsection
</body>
</html>
