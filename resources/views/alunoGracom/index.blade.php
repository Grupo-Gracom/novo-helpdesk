@extends('template.layout.app-admin')
	@section('titulo','Alunos')
	@section('alunoGracom','active')
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
			</ol>
		</div><!--/.row-->
		<br>
			<div style="height:55px;"></div>
			<div class="row">
				<div class="col-md-12">
					@include('template.alerta.flash-message')
				</div>
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
						<i class="fa fa-graduation-cap"></i>
						Alunos Gracom

								<form action="/buscaGracom" method="get" class="form-inline pull-right">
									<div class="form-group">
										<input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ isset($nome) ? $nome : '' }}">
									</div>
									<div class="form-group">
										<button class="btn btn-success" type="submit" >Procurar</button>
										<a class="btn btn-danger" href="{{route('alunoGracom.index')}}">Limpar</a>
									</div>
								</form>

						</div>

						<div class="panel-body">
						<table style="width:100%" class="display table">
							<thead>
								<tr>
									<th>Matricula</th>
									<th>Email</th>
									<th>Senha</th>
									<th>Ação</th>
								</tr>
							</thead>
							<tbody>
							@foreach ($alunos as $aluno)

								<tr>
								<td>{{$aluno->matricula}}</td>
								<td>{{$aluno->email}}</td>
								<td><input type="password" value="{{$aluno->senha}}" readonly style="background: none; border: none;"></td>
								<td><a href="{{ route('alunoGracom.edit',[$aluno->matricula]) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a></td>
                                </tr>
                                @endforeach
							</tbody>
						</table>
						@forelse($alunos as $aluno)
                		@empty
                			<p class="text-center"> <strong> Nenhum Resultado Encontrado </strong> </p>
                		@endforelse
						<div class="pull-right">
							{{ $alunos->links() }}
						</div>
						</div>

					</div>
				</div>
			</div><!--/.row-->

    </div><!--/.main-->
@endsection
