@extends('template.layout.app-admin')
    @section('titulo','Meus Chamados')
	@section('conteudo')
	@section('chamados','active')
    @include('template.layout.header')
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		@include('template.menu.sidebar')
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Meus Chamados</li>
			</ol>
		</div><!--/.row-->
		<br>
			<div class="row">
				<div class="col-md-12">
					@include('template.alerta.flash-message')
				</div>
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
						<i class="fa fa-book"></i>
						Meus Chamados</div>
						<div class="panel-body">
						<table class="display list table table-hover table-responsive" style="width:100%">
							<thead>
								<tr>
									<th>Titulo</th>
									<th>Observação</th>
									<th>Escola Parceira</th>
									<th>Categoria</th>
									<th>Status</th>
									<th>Data Criação</th>
									<th>Última Modificação</th>
									<th>Quem solicitou</th>
									<th>Suporte solicitante</th>
									<th>Ação</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($chamados as $chamado)
								<tr>
									<td>{{$chamado->titulo_chamado}}</td>
									<td>{{$chamado->observacao}}</td>
									<td>{{$chamado->unidade_nome}}</td>
									<td>{{$chamado->nome_categoria}}</td>
									<td>
									@if($chamado->status==0)
									<button class="btn btn-success"> <i class="fa fa-archive"></i> Aberto</button>
									@endif
									</td>
									<td>{{date('d/m/Y H:m:s', strtotime($chamado->created_at))}}</td>
									<td>{{date('d/m/Y H:m:s', strtotime($chamado->updated_at))}}</td>
									<td>{{$chamado->quem_solicitou}}</td>
									<td>{{$chamado->solicitante}}</td>
									<td><a href="{{ route('chamados.edit',[$chamado->id]) }}" class="btn btn-warning"> <i class="fa fa-pencil"></i> Editar</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div><!--/.row-->

    </div><!--/.main-->
@endsection
