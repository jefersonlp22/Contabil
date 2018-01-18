@extends('..\app')
@section('content')
<body id="welcome">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Cadastrar Cliente</div>
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/clientes') }}">
						{!! csrf_field() !!}

						<div class="form-group">
							<label class="col-md-4 control-label">Cliente</label>
							<div class="col-md-1">
								<input type="text"  name="name" >
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Endereço</label>
							<div class="col-md-6">
								<input type="text"  name="address">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">CPF/CNPJ</label>
							<div class="col-md-6">
								<input type="text"  name="cpf">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Telefone</label>
							<div class="col-md-6">
								<input type="text"  name="phone">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Cadastrar</button>	
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
</body>