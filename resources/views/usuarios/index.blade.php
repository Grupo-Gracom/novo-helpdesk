@extends('template.layout.app-admin')
	@section('titulo','Usuários')
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
				<li class="active">Usuários</li>
			</ol>
		</div><!--/.row-->
		<br>
			<a href="/adicionar_usuario" class="btn btn-success pull-right">
			<i class="fa fa-home"></i>	
			Adicionar Usuário</a>
			<div style="height:55px;"></div>
			<div class="row">
				<div class="col-md-12">
					@include('template.alerta.flash-message')
				</div>
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
						<i class="fa fa-user"></i>	
						Usuários</div>
						<div class="panel-body">
						<table class="display list" style="width:100%">
							<thead>
								<tr>
									<th>Nome Usuário</th>
									<th>Email</th>
									<th>Data Criação</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($usuarios as $usuario)
									<tr>
										<td>{{$usuario->name}}</td>
										<td>{{$usuario->email}}</td>
										<td>{{date('d/m/Y H:m:s', strtotime($usuario->created_at))}}</td>
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