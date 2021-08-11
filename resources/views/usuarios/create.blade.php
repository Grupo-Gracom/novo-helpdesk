@extends('template.layout.app-admin')
	@section('titulo','Novo Chamado')
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
				<li class="active">Novo Usuário</li>
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
						<i class="fa fa-user"></i>
						Novo Usuário</div>
						<div class="panel-body">
                        <form class="form-horizontal row-border" action="{{route('usuarios.store')}}" method="POST">
                            {{ csrf_field() }}
								<div class="form-group">
									<label class="col-md-2 control-label">Nome:</label>
									<div class="col-md-6">
										<input type="text" name="name" class="form-control" value="{{old('name')}}">
									</div>
								</div>
                                <div class="form-group">
									<label class="col-md-2 control-label">Email:</label>
									<div class="col-md-6">
										<input type="email" name="email" class="form-control" value="{{old('email')}}">
									</div>
								</div>
                                <div class="form-group">
									<label class="col-md-2 control-label">Senha:</label>
									<div class="col-md-6">
										<input type="password" name="password" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"></label>
									<div class="col-md-6">
										<button type="submit" class="btn btn-success">Lançar Usuário </button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!--/.row-->

    </div><!--/.main-->
@endsection
