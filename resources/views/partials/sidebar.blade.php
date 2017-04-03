<div class="static-sidebar-wrapper sidebar-default">
                    <div class="static-sidebar">
						<div class="sidebar">
							<div class="widget">
						        <div class="widget-body">
						            <div class="userinfo">
					                    <span class="useremail">Bem Vindo</span>
					                    <br>
					                    <span class="username">{{ Auth::user()->name }}</span>
						            </div>
						        </div>
						    </div>
							<div class="widget stay-on-collapse" id="widget-sidebar">
						     <nav role="navigation" class="widget-body">
								<ul class="acc-menu">
									<li>
										<a href="{{ url('/representantes') }}">
										<i class="fa fa-circle"></i>
										<span>Representantes</span>
										</a>
									</li>
									<li>
										<a href="{{ url('/floraplac') }}">
										<i class="fa fa-circle"></i>
										<span>Floraplac</span>
										</a>
									</li>
									<li>
										<a href="http://floraplac.com.br/onde-encontrar" target="_blank">
										<i class="fa fa-circle"></i>
										<span>Visualizar alterações</span>
										</a>
									</li>
								</ul>
							</nav>
						    </div>
						    <div class="widget" id="widget-progress">
						        <div class="widget-heading">
						            RESUMO
						        </div>
						        <div class="widget-body">
						            <div class="mini-progressbar">
						                <div class="clearfix mb-sm">
						                    <div class="pull-left">Bandwidth</div>
						                    <div class="pull-right">50%</div>
						                </div>
						                
						                <div class="progress">    
						                    <div class="progress-bar progress-bar-lime" style="width: 50%"></div>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>
                    </div>
                </div>