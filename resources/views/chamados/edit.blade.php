@extends('template.layout.app-admin')
	@section('titulo','Editar chamado')
	@section('chamado','active')
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
				<li class="active">chamado</li>
				<li class="active">Editar chamado</li>
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
						Editar chamado</div>
						<div class="panel-body">
                        <form class="form-horizontal row-border" action="{{ route('chamados.update', $chamado->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-group">
                                <label class="col-md-2 control-label">Titulo:</label>
									<div class="col-md-6">
										<input type="text" value="{{$chamado->titulo_chamado}}" name="titulo_chamado" class="form-control">
									</div>
								</div>
                                <div class="form-group">
									<label class="col-md-2 control-label">Observação:</label>
									<div class="col-md-6">
										<textarea class="form-control" name="observacao">{{$chamado->observacao}}</textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Categoria:</label>
									<div class="col-md-6">
										<select class="form-control" name="id_categoria">
                                            @foreach($categoria as $categorias)
											<option value="{{$categorias->id}}">{{$categorias->nome_categoria}}</option>
                                            @endforeach
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Status:</label>
									<div class="col-md-6">
										<select class="form-control" name="status">
											<option value="0">Aberto</option>
											<option value="1">Arquivado</option>
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
