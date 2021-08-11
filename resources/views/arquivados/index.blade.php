@extends('template.layout.app-admin')
	@section('titulo','Meus Chamados')
	@section('configuracao','active')
    @section('conteudo')
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
				<li class="active"> Chamados Arquivados</li>
			</ol>
		</div><!--/.row-->
		<br>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
						<i class="fa fa-book	"></i>
						    Chamados Arquivados</div>
						<div class="panel-body">
						<table class="display list" style="width:100%">
							<thead>
								<tr>
									<th>Titulo</th>
									<th>Observação</th>
									<th>Escola</th>
									<th>Categoria</th>
									<th>Última Modificação</th>
									<th>Status</th>
								</tr>
							</thead>

							<tbody>
								@foreach ($chamados as $chamado)
								<tr>
									<td>{{$chamado->titulo_chamado}}</td>
									<td>{{$chamado->observacao}}</td>
									<td>{{$chamado->unidade_nome}}</td>
									<td>{{$chamado->nome_categoria}}</td>
									<td>{{date('d/m/Y H:m:s', strtotime($chamado->updated_at))}}</td>

									<td>
									@if($chamado->status==1)
									<button class="btn btn-danger"> <i class="fa fa-archive"></i> Arquivado</button>
									@endif
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
