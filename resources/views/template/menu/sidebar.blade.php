<div class="profile-sidebar">
				<div class="profile-userpic">
					<img src="{{asset('assets/img/user.png')}}" class="img-responsive" alt="">
				</div>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">{{Auth::user()->name}}</div>
					<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="divider"></div>
<ul class="nav menu">
			<li class="@yield('home')"><a href="/home"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="@yield('ticket')"><a href="/ticket"><em class="fa fa-plus">&nbsp;</em> Novo Chamado</a></li>
			<li class="@yield('chamados')"><a href="/chamados"><em class="fa fa-phone" >&nbsp;</em> Solicitações</a></li>
			<li class="@yield('professor')"><a href="/professor"><em class="fa fa-graduation-cap">&nbsp;</em> Professores</a></li>
			<li class="@yield('aluno')"><a href="/aluno"><em class="fa fa-users">&nbsp;</em> Alunos FP</a></li>
			<li class="@yield('alunoStudio')"><a href="/alunoStudio"><em class="fa fa-users">&nbsp;</em> Alunos Studio Games</a></li>

			<li class="parent @yield('alunoGracom') "><a data-toggle="collapse" href="#sub-item-2">
					 Gracom <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
					</a>
					<ul class="children collapse" id="sub-item-2">
						<li><a class="" href="/alunoGracom">
							<span class="fa fa-users">&nbsp;</span> Alunos
						</a></li>
					</ul>
				</li>

			<li class="parent @yield('alunoImugi') "><a data-toggle="collapse" href="#sub-item-3">
					Imugi <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
				   </a>
				   <ul class="children collapse" id="sub-item-3">
					   <li><a class="" href="/alunoImugi">
						   <span class="fa fa-users">&nbsp;</span> Alunos
					   </a></li>
				   </ul>
			   </li>
			<li class="parent @yield('configuracao') "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Configurações <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="/unidades">
						<span class="fa fa-arrow-right">&nbsp;</span> Unidades
					</a></li>
					<li><a class="" href="/categorias">
						<span class="fa fa-arrow-right">&nbsp;</span> Categorias
					</a></li>
					<li><a class="" href="/arquivados">
						<span class="fa fa-arrow-right">&nbsp;</span> Chamados Arquivados
					</a></li>
					<li><a class="" href="/usuarios">
						<span class="fa fa-arrow-right">&nbsp;</span> Usuarios
					</a></li>
				</ul>
			</li>
			<li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{csrf_field()}}
            </form>
		</ul>
