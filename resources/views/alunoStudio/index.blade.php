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
									<th>Nome</th>
									<th>Email</th>
									<th>Ação</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
						
						</div>

					</div>
				</div>
                
                
                <!-- Painel Lateral -->
                
                <div id="lateral">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
                        <h4><i class="fa fa-user"></i> Editar Aluno <i class="fa fa-close fechar"></i></h4>
                         </div>
						<div class="panel-body">
                        <form class="form-horizontal row-border" action="http://localhost:8000/chamados" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
								<div class="form-group">
									
									<div class="col-md-12">
                                        <label class="control-label">Matricula:</label>
										<input type="text" name="matricula" class="form-control">
									</div>
                                    <div class="col-md-12">
                                        <label class="control-label">Nome:</label>
										<input type="text" name="name" class="form-control">
									</div>
                                    <div class="col-md-12">
                                        <label class="control-label botao-topo">Email:</label>
										<input type="email" name="email" class="form-control" value="">
									</div>
                                    <div class="col-md-12">
                                        <label class="control-label botao-topo">Nova Senha:</label>
										<input type="text" name="senha" class="form-control" value="">
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-md-6">
										<button type="submit" class="btn btn-success btn-lg"> <i class="fa fa-check"></i> Salvar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div><!--/.row-->

    </div><!--/.main-->

<script>
		var table;
    function carregar(){
        table = $('#alunos-studio').DataTable({
            ajax: {
                url: 'https://studiogames.art.br/api-users/',
                dataSrc: ''
            },
            columns: [
                {data: 'matricula', width: "100px", className: 'dt-body-center dt-head-center'},
				{data: 'name', width: "500px", className: 'dt-body-center dt-head-center'},
                {data: 'email', width: "100px", className: 'dt-body-center dt-head-center'},
				{data: ''}
            ],
            columnDefs: [
                {
                    width: "100px",
                    className: 'dt-body-center dt-head-center',
                    targets: -1,
                    data: null,
                    defaultContent: '<button class="btn btn-primary editar"><i class="fa fa-pencil"></i> Editar </btn>'
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

    $(document).on("click", ".editar", function(){
            var data = table.row($(this).parents("tr")).data();
            $("#lateral").addClass("ativo");
            //consultar(data.curso_id);
    });

	function consultar(curso_id){
        request = $.ajax({
            url: 'cursos/' + curso_id,
            type: 'get',
            error: function(){
                alerta("Falha na consulta!");
            }
        });
        request.done(function(response){
            $('#formEditar input[name="e_curso_id"]').val(response.curso_id);
            // $('#formEditar input[name="e_curso_nome"]').val(response.curso_nome);
            // $('#formEditar input[name="e_curso_nivel"]').val(response.curso_nivel);
            // $('#formEditar input[name="e_curso_duracao"]').val(response.curso_duracao);
            // $('#formEditar textarea').val(response.curso_descricao);
            // $('#formEditar #e_curso_destaque option[value="'+response.curso_destaque+'"]').prop("selected", true);
            // $('#formEditar #e_curso_status option[value="'+response.curso_status+'"]').prop("selected", true);
            // $('#formEditar #e_software_id option[value="'+response.software_id+'"]').prop("selected", true);
            // $('#formEditar #e_unidade_id option[value="'+response.unidade_id+'"]').prop("selected", true);
        });
    }


    $(".fechar").click(function(){
        $("#lateral").removeClass("ativo");
    });



	</script>

@endsection
