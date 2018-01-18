@extends('app')
@section('content')
        <div class="container">
              <h3 align="center">Clintes Interessados</h3>

              <table class="table table-striped table-bordered table-hover">
              	<thead>
              		<tr>
              			<th >ID</th>
              			<th >Nome</th>
              			<th >Telefone</th>
              			<th >Email</th>
                    <th >Mensagem</th>
                    <th>Observações</th>
              			<th >Ação</th>
              		</tr>
              	</thead>

              	<tbody>
              	@forelse ($interesseds as $interessed)
              	<tr>
          					<td width="1%" nowrap="nowrap">{{$interessed->id}} </td> 
          					<td width="10%" nowrap="nowrap">{{$interessed->name}} </td> 
          					<td width="3%" nowrap="nowrap">{{$interessed->phone}}</td>
          					<td width="3%" nowrap="nowrap">{{$interessed->email}}</td>
                    <td width="10%" >{{$interessed->message}}</td>
                    <td width="3%" nowrap="nowrap">{{$interessed->comments}}</td>

                    <td width="2%"><a class="btn-sm btn-primary" href="interessed/{{$interessed->id}}/edit">Editar</a>
                     </td>

				</tr>
	@empty 
	<p>Nenhum cliente ainda entrou contato</p>
@endforelse
              	</tbody>
              </table>
        </div>

@endsection