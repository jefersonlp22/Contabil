@extends('app')
@section('content')
       <div class="container">
              <h3 align="center">Propostas de Clientes</h3>
               @forelse ($proposals as $proposal)

              <table width="95%" class="table table-striped table-bordered table-hover">
              	  
                <thead>
              		<tr>
              			
              			<th >Nome</th>
              			<th >Tipo de Atividade</th>
              			<th >Endereço</th>
                   	<th >CNPJ</th>
              			<th >Email</th>
              			<th >Telefone</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    
                    <td  nowrap="nowrap">{{$proposal->companyName}} </td> 
                    <td  nowrap="nowrap">{{$proposal->activityType}}</td>
                    <td  nowrap="nowrap">{{$proposal->address}}</td>
                    <td nowrap="nowrap">{{$proposal->cnpj}}</td>
                    <td  nowrap="nowrap">{{$proposal->email}}</td>
                    <td  nowrap="nowrap">{{$proposal->phone}}</td>
                  </tr>
                 </tbody>
                  <thead>
                  <tr>
              			<th >Qtd NF Entrada</th>
              			<th >Qtd NF Saida</th>
              			<th >Qtd Empregados</th>
              			<th >Tipo de Tarifação</th>
              			<th >Obseravações</th>
              			<th>Ação</th>
              		</tr>
                </thead>
                
                 <tbody>
                  <tr>
                    <td  nowrap="nowrap">{{$proposal->qtdNFIn}}</td>
                    <td  nowrap="nowrap">{{$proposal->qtdNFOut}}</td>
                    <td  nowrap="nowrap">{{$proposal->qtdEmployes}}</td>
                    <td  nowrap="nowrap">{{$proposal->typeTaxation}}</td>
                    <td  nowrap="nowrap">{{$proposal->Comments}}</td>
                    <td ="1%"><a class="btn-sm btn-primary" href="proposal/{{$proposal->id}}/edit">Editar</a>
                    </td>
				          </tr><br>
                        	@empty 
                        	<p><h3> Nenhum cliente ainda enviou sua Proposta</p></h3>
                          @endforelse 

                </tbody>
              </table>
              <p>{!!$proposals->render()!!} </p>
       </div>
       

@endsection