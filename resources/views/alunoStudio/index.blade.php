@extends('template.layout.app-admin')
	@section('titulo','Alunos Studio Games')
	@section('alunoStudio','active')
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
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
						<i class="fa fa-graduation-cap"></i>
						Alunos Studio Games
					</div>

						<div class="panel-body">
						<table style="width:100%" class="display table" id="alunos-studio">
							<thead>
								<tr>
									<th>Matricula</th>
									<th>Email</th>
									<th>Senha</th>
									<th>Ação</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
						
						</div>

					</div>
				</div>
			</div><!--/.row-->

    </div><!--/.main-->
   <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script>
		var table;
    function carregar(){
        table = $('#alunos-studio').DataTable({
            ajax: {
                url: 'https://studiogames.art.br/api-users',
                dataSrc: ''
            },
            columns: [
                {data: 'id', width: "60px", className: 'dt-body-center dt-head-center'},
                {data: 'name', width: "100px", className: 'dt-body-center dt-head-center'},
                {data: 'matricula', width: "100px", className: 'dt-body-center dt-head-center'},
				{data: 'email', width: "100px", className: 'dt-body-center dt-head-center'}
            ],
            columnDefs: [
                {
                    width: "100px",
                    className: 'dt-body-center dt-head-center',
                    targets: -1,
                    data: null,
                    defaultContent: '<i class="material-icons click suave editar">create</i><i class="material-icons click suave deletar">delete</i>'
                }
            ],
            language: {
                processing:     "Carregando",
                search:         "Pesquisar",
                lengthMenu:     "Mostrando _MENU_ registros",
                info:           "De _START_ à _END_ de _TOTAL_ registros",
                paginate: {
                    first:      "Primeiro",
                    previous:   "Anterior",
                    next:       "Próximo",
                    last:       "Último"
                },
                emptyTable:     "Nenhum registro cadastrado!",
                zeroRecords:    "Nenhum registro encontrado!",
                loadingRecords: "Carregando...",
                infoEmpty:      "Nenhum registro encontrado",
                infoFiltered:   "(filtrado de _MAX_ cadastros)",

            }
        });
	} carregar();
	</script>

@endsection
