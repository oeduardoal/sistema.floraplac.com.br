
	<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
    <header id="topnav" class="navbar navbar-default navbar-fixed-top navbar-white" role="banner">
	<div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
			</a>
		</span>
		<a class="navbar-brand" href="{{ url('/') }}">WSF</a>
	</div>

	<ul class="nav navbar-nav toolbar pull-right">
		<li class="toolbar-icon-bg visible-xs-block" id="trigger-toolbar-search">
			<a href="#"><span class="icon-bg"><i class="ti ti-search"></i></span></a>
		</li>
		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="dropdown-toggle username" data-toggle="dropdown">
				<img class="img-circle" src="/assets/img/profile.png" alt="" />
			</a>
			<ul class="dropdown-menu userinfo arrow">
				{{-- <li>
					<a href="#/">
						<i class="ti ti-settings"></i>
						<span>Settings</span>
					</a>
				</li> --}}
				{{-- <li class="divider"></li> --}}
				<li>
				<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					<i class="ti ti-shift-right"></i>
					<span>Sair</span>
				</a>
				</li>
			</ul>
		</li>
	</ul>
</header>