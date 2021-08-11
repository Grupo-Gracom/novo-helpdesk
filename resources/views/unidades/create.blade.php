@extends('template.layout.app-admin')
	@section('titulo','Nova Unidade')
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
				<li class="active">Nova Unidade</li>
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
						Nova Unidade</div>
						<div class="panel-body">
                        <form class="form-horizontal row-border" action="{{route('unidades.store')}}" method="POST">
                            {{ csrf_field() }}
								<div class="form-group">
									<label class="col-md-2 control-label">Nome Unidade:</label>
									<div class="col-md-6">
										<input type="text" name="unidade" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Tipo Unidade:</label>
									<div class="col-md-6">
										<select class="form-control" name="tipo">
                                            @foreach($escolas as $escola)
                                            <option value="{{$escola->id_escola}}">{{$escola->tipo}}</option>
                                            @endforeach
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"></label>
									<div class="col-md-6">
										<button type="submit" class="btn btn-success">Lançar Unidade </button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!--/.row-->

    </div><!--/.main-->
@endsection
