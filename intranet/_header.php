<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
						Re/max United
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="../agentes/<?php echo $_SESSION["Xcodigo"];?>.png" alt="<?php echo $_SESSION["Xnombre"];?>" />
								<span class="user-info">
									<small>Bienvenido,</small>
									<?php echo $_SESSION["Xnombre"];?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
	
								<li class="divider"></li>

								<li>
									<a href="login.php?logout">
										<i class="icon-off"></i>
										Salir
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>