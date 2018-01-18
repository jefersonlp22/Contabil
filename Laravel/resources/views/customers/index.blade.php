


@extends('app')
@section('content')
        <div class="container">
              <h3 align="center">Lista de Clientes</h3>

              <table class="table table-striped table-bordered table-hover">
              	<thead>
              		<tr>
              			<th >ID</th>
              			<th >Nome</th>
              			<th >Endereço</th>
              			<th >CPF</th>
                        <th >Telefone</th>
              			<th >Ação</th>
              		</tr>
              	</thead>

              	<tbody>
              	@forelse ($customers as $customer)
              	<tr>
					<td width="3%" nowrap="nowrap">{{$customer->id}} </td> 
					<td width="31%" nowrap="nowrap">{{$customer->name}} </td> 
					<td>{{$customer->address}}</td>
					<td width="3%" nowrap="nowrap">{{$customer->cpf}}</td>
					<td width="3%" nowrap="nowrap">{{$customer->phone}}</td>
					<td width="12%"><a class="btn-sm btn-primary" href="/clientes/{{$customer->id}}/edit">Editar</a>
           <a class="btn-sm btn-primary" href="/clientes/{{$customer->id}}">Pedidos</a></td>

				</tr>
	@empty 
	<p>Nenhum cliente Cadastrado</p>
@endforelse
              	</tbody>
              </table>
             <a href="clientes/create" class="btn btn-primary">Cadratrar Cliente</a>
        </div>

@endsection