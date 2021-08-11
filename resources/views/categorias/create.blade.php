@extends('template.layout.app-admin')
	@section('titulo','Nova Categoria')
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
					<em class="fa fa-cog"></em>
				</a></li>
				<li class="active">Nova Categoria</li>
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
						<i class="fa fa-cog"></i>
						Nova Categoria</div>
						<div class="panel-body">
                        <form class="form-horizontal row-border" action="{{route('categorias.store')}}" method="POST">
                            {{ csrf_field() }}
								<div class="form-group">
									<label class="col-md-2 control-label">Categoria:</label>
									<div class="col-md-6">
										<input type="text" name="nome_categoria" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"></label>
									<div class="col-md-6">
										<button type="submit" class="btn btn-success">Lançar Categoria </button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!--/.row-->

    </div><!--/.main-->
@endsection
