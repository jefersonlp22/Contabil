@extends('app')

@section('content')
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

        <form class="form-horizontal" role="form" method="GET" action="/clientes/update/{{$customers->id}}">
            {!! csrf_field() !!}

            <div class="form-group">
              <label class="col-md-4 control-label">Cliente</label>
              <div class="col-md-1">
                <input type="text"  name="name" value="{{$customers->name}}">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Endereço</label>
              <div class="col-md-6">
                <input type="text"  name="address" value="{{$customers->address}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">CPF/CNPJ</label>
              <div class="col-md-6">
                <input type="text"  name="cpf" value="{{$customers->cpf}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Telefone</label>
              <div class="col-md-6">
                <input type="text"  name="phone" value="{{$customers->phone}}">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Atualizar</button> 
                <a href="/clientes/destroy/{{$customers->id}}" class="btn btn-danger">Excluir</a> 
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
