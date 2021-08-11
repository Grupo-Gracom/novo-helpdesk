	@extends('template.layout.app-admin')
	@section('titulo','Home')
	@section('home','active')
	@section('conteudo')
	@include('template.layout.header')
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		@include('template.menu.sidebar')
	</div>
	<!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-blue"></em>
							<div class="large">{{$totalProfessor}}</div>
							<div class="text-muted">Quantidades de Professores </div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-blue"></em>
							<div class="large">{{$totalAlunoPremium}}</div>
							<div class="text-muted">Alunos Premium</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">{{$totalAlunoFree}}</div>
							<div class="text-muted">Alunos Free</div>
						</div>
					</div>
				</div>
			</div>
			<!--/.row-->
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Solicitações x Solicitações Resolvidas
					</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
							<div style="width:100%;">
								{!! $chartjs->render() !!}
							</div>
                        </div>
				</div>
			</div>
		</div><!--/.row-->
			<div class="col-sm-12">
				<p class="back-link"> Sistema Helpdesk 2019 </p>
			</div>
		</div><!--/.row-->
        </div>	<!--/.main-->
	@endsection


