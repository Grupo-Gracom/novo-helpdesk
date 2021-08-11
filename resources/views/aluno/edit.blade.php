@extends('template.layout.app-admin')
	@section('titulo','Editar Aluno')
	@section('aluno','active')
    @section('conteudo')
    @include('template.layout.header')
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		@include('template.menu.sidebar')
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-user"></em>
				</a></li>
				<li class="active">Alunos</li>
				<li class="active">Editar Aluno</li>
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
						Editar Aluno</div>
						<div class="panel-body">
							<form class="form-horizontal row-border" action="{{ route('aluno.update', $aluno->id) }}" method="POST">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">>
                                <div class="form-group">
									<label class="col-md-2 control-label">Matricula:</label>
									<div class="col-md-6">
										<input type="text" value="{{ $aluno->matricula }}" maxlength="10" name="matricula" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Nome Aluno:</label>
									<div class="col-md-6">
                                    <input type="text" value="{{ $aluno->name }}" name="nome" class="form-control">
									</div>
								</div>
                                <div class="form-group">
									<label class="col-md-2 control-label">Email:</label>
									<div class="col-md-6">
										<input type="email" value="{{ $aluno->email }}" name="email" class="form-control">
									</div>
								</div>
                                <div class="form-group">
									<label class="col-md-2 control-label">Senha:</label>
									<div class="col-md-6">
										<input type="password" value="{{ $aluno->password }}" name="senha" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Nivel:</label>
									<div class="col-md-6">
										<select class="form-control" name="nivel">
											<option value="{{ $aluno->nivel }}"> {{$aluno->nivel  < 3 ? "Open Class [Free]" : "Design Standard [Premium]" }}</option>
											<option value="0">Open Class [Free]</option>
                      <option value="3">Design Standard [Premium]</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Status:</label>
									<div class="col-md-6">
										<select class="form-control" name="status">
											<option value="{{ $aluno->status }}"> {{$aluno->status  < 1 ? "Ativo" : "Inativo" }}</option>
											<option value="0">Ativo</option>
                      <option value="1">Inativo</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"></label>
									<div class="col-md-6">
										<button class="btn btn-success" type="submit">Salvar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!--/.row-->

    </div><!--/.main-->
@endsection
