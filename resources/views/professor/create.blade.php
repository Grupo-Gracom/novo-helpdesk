@extends('template.layout.app-admin')
	@section('titulo','Adicionar Professor')
	@section('professor','active')
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
                <li class="active">Professores</li>
				<li class="active">Adicionar Professor</li>
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
						<i class="fa fa-graduation-cap"></i>
						Adicionar Professor</div>
						<div class="panel-body">
						<form class="form-horizontal row-border" action="{{ route('professor.store') }}" method="POST">
                            {{ csrf_field() }}
								<div class="form-group">
									<label class="col-md-2 control-label">Nome:</label>
									<div class="col-md-6">
										<input type="text" name="nome" class="form-control" value="{{old('name')}}">
									</div>
                                </div>
								{{-- <div class="form-group">
									<label class="col-md-2 control-label">Sobrenome:</label>
									<div class="col-md-6">
										<input type="text" name="sobrenome" class="form-control" value="{{old('sobrenome')}}">
									</div>
                                </div> --}}
                                <div class="form-group">
									<label class="col-md-2 control-label">Senha:</label>
									<div class="col-md-6">
										<input type="password" name="senha" class="form-control">
									</div>
                                </div>
                                <div class="form-group">
									<label class="col-md-2 control-label">Email:</label>
									<div class="col-md-6">
										<input type="email" name="email" class="form-control" value="{{old('email')}}">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Gênero:</label>
									<div class="col-md-6">
										<select class="form-control" name="sexo">
                                            <option value="Masculino">Masculino</option>
                                            <option value="Feminino">Feminino</option>
                                            <option value="Outros">Outros</option>
										</select>
									</div>
                                </div>
                                <div class="form-group">
									<label class="col-md-2 control-label">Telefone:</label>
									<div class="col-md-6">
										<input type="text" name="telefone" class="form-control telefone" value="{{old('telefone')}}">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"></label>
									<div class="col-md-6">
										<button class="btn btn-success" type="submit">Cadastrar </button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!--/.row-->

    </div><!--/.main-->
@endsection