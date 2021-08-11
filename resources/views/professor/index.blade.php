@extends('template.layout.app-admin')
	@section('titulo','Professor')
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
				<li class="active">Professor</li>
			</ol>
		</div><!--/.row-->
		<br>
			<a href="/adicionar_professor" class="btn btn-success pull-right">
			<i class="fa fa-graduation-cap"></i>
			Adicionar Professor</a>
			<div style="height:55px;"></div>
			<div class="row">
				<div class="col-md-12">
					@include('template.alerta.flash-message')
				</div>
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
						<i class="fa fa-graduation-cap"></i>
						Professores

						<form action="/buscaProfessor" method="get" class="form-inline pull-right">
									<div class="form-group">
										<input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ isset($nome) ? $nome : '' }}">
									</div>
									<div class="form-group">
										<button class="btn btn-success" type="submit" >Procurar</button>
										<a class="btn btn-danger" href="{{route('professor.index')}}">Limpar</a>
									</div>
								</form>
						</div>

						<div class="panel-body">
						<table style="width:100%" class="display table">
							<thead>
								<tr>
									<th>Nome Usuário</th>
									<th>Email</th>
									<th>Nível</th>
                                    <th>Status</th>
									<th>Ação</th>
								</tr>
							</thead>
							<tbody>
                            @foreach ($professores as $professor)
								<tr>
                                <td>{{$professor->name}}</td>
								<td>{{$professor->email}}</td>
								<td>Professor</td>
                                @if($professor->status == 0)
                                <td>Ativo</td>
                                @else
                                <td>Inativo</td>
                                @endif
								<td><a href="{{ route('professor.edit',[$professor->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a></td>
                                </tr>
                                @endforeach
							</tbody>
						</table>
						@forelse($professores as $professor)
                		@empty
                			<p class="text-center"> <strong> Nenhum Resultado Encontrado </strong> </p>
                		@endforelse
						<div class="pull-right">
							{{ $professores->links() }}
						</div>
						</div>

					</div>
				</div>
			</div><!--/.row-->

    </div><!--/.main-->
@endsection


