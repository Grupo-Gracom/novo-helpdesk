@extends('template.layout.app-admin')
	@section('titulo','Adicionar Aluno')
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
					<em class="fa fa-home"></em>
                </a></li>
                <li class="active">Alunos</li>
				<li class="active">Adicionar Aluno</li>
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
						Adicionar Aluno</div>
						<div class="panel-body">
                        <form class="form-horizontal row-border" action="{{ route('aluno.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
									<label class="col-md-2 control-label">Matricula:</label>
									<div class="col-md-6">
										<input type="text" name="matricula" class="form-control">
									</div>
                                </div>
								<div class="form-group">
									<label class="col-md-2 control-label">Nome:</label>
									<div class="col-md-6">
										<input type="text" name="nome" class="form-control">
									</div>
                                </div>
								{{-- <div class="form-group">
									<label class="col-md-2 control-label">Sobrenome:</label>
									<div class="col-md-6">
										<input type="text" name="sobrenome" class="form-control">
									</div>
                                </div> --}}
                                <div class="form-group">
									<label class="col-md-2 control-label">Senha:</label>
									<div class="col-md-6">
										<input type="password" maxlength="12" name="senha" class="form-control">
									</div>
                                </div>
                                <div class="form-group">
									<label class="col-md-2 control-label">Email:</label>
									<div class="col-md-6">
										<input type="email" name="email" class="form-control">
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
                                    <label class="col-md-2 control-label">Unidade:</label>
									<div class="col-md-6">
										<select class="form-control" name="cod_unidade">
                                            @foreach ($unidades as $unid)
                                            <option value="{{$unid->unidade_id}}">{{$unid->unidade_nome}}</option>
                                            @endforeach
                                        </select>
									</div>
                                </div>
                                <div class="form-group">
									<label class="col-md-2 control-label">Telefone:</label>
									<div class="col-md-6">
										<input type="text" name="telefone" class="form-control telefone">
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
