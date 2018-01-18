@extends('app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Parceiros</title>
</head>
<body>
 

		
			<div class="panel panel-default">
				<h3 align="center"> Editar Interessados</h3>
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

					<form class="form-horizontal" role="form" method="GET" action="/interessed/update/{{$interesseds->id}}">
					 
						{!! csrf_field() !!}

						<div class="form-group">
							<label class="col-md-4 control-label">Nome</label>
							<div class="col-md-1">
								<input type="text" name="name"  value="{{$interesseds->name}}" placeholder="Obrigatorio">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Telefone</label>
							<div class="col-md-6">
								<input type="text" value="{{$interesseds->phone}}"  name="phone" id="phoneId" placeholder="Obrigatorio">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Email</label>
							<div class="col-md-6">
								<input type="text" value="{{$interesseds->email}}"  name="email" id="emailId" placeholder="Obrigatorio">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Sua Mensagem</label>
							<div class="col-md-6">
								<input type="text" value="{{$interesseds->message}}" name="message" id="menssegeId"cols="50" rows="5">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Observações</label>
							<div class="col-md-6">
								<input type="text" value="{{$interesseds->comments}}" name="comments" id="commentsId"cols="50" rows="5">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Atualizar</button>
					<a href="/interessed/destroy/{{$interesseds->id}}" class="btn btn-danger">Excluir</a> 
	
							</div>
						</div>
					</form>
				</div>
			</div>
		
	

@endsection
</body>
</html>
