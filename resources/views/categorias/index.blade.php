@extends('template.layout.app-admin')
    @section('titulo','Meus Chamados')
	@section('conteudo')
	@section('configuracao','active')
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
				<li class="active">Categorias</li>
			</ol>
		</div><!--/.row-->
		<br>
		<a href="/adicionar_categoria" class="btn btn-success pull-right">
			<i class="fa fa-cog"></i>
			Adicionar Categoria</a>
			<div style="height:50px;"></div>
			<div class="row">
				<div class="col-md-12">
					@include('template.alerta.flash-message')
				</div>
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
						<i class="fa fa-cogs"></i>
						Categorias</div>
						<div class="panel-body">
						<table class="display list" style="width:100%">
							<thead>
								<tr>
									<th>#</th>
									<th>Categorias</th>
								</tr>
							</thead>
							<tbody>
							@foreach ($categorias as $categoria)
									<tr>
										<td>{{$categoria->id}}</td>
										<td>{{$categoria->nome_categoria}}</td>
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
