@extends('home')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Parceiros</title>
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('interessed') }}">
						{!! csrf_field() !!}

						<div class="form-group">
							<label class="col-md-4 control-label">Nome</label>
							<div class="col-md-1">
								<input type="text"  name="name" id="nameId" placeholder="Obrigatorio">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Telefone</label>
							<div class="col-md-6">
								<input type="text"  name="phone" id="phoneId" placeholder="Obrigatorio">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Email</label>
							<div class="col-md-6">
								<input type="text"  name="email" id="emailId" placeholder="Obrigatorio">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Sua Mensagem</label>
							<div class="col-md-6">
								<textarea id="menssegeId" name="message" cols="50" rows="5"></textarea>
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
