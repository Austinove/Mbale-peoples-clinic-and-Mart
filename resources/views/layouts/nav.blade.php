<header class="header trans_200">
		
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
							<div class="top_bar_item"><a href="#">FAQ</a></div>
							<div class="top_bar_item"><a data-toggle="modal" data-target="#appointment" href="#">Request an Appointment</a></div>
							<div class="emergencies  d-flex flex-row align-items-center justify-content-start ml-auto">For Emergencies: +563 47558 623</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav ml-auto">
								<ul>
									<li><a href="{{ url('/') }}">Home</a></li>
									<li><a href="{{ url('/aboutus') }}">About us</a></li>
									<li><a href="{{ url('/services') }}">Services</a></li>
									<li><a href="{{ url('/news') }}">News</a></li>
									<li><a href="{{ url('/contactus') }}">Contact</a></li>
									<li class="nav-item dropdown">
										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											Administrator <span class="caret"></span>
										</a>

										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" data-toggle="modal" data-target="#slides" href="#"><i class="fa fa-slideshare"></i> Slides</a>
											<a class="dropdown-item" data-toggle="modal" data-target="#news" href="#"><i class="fa fa-newspaper-o"></i> News</a>
											<a class="dropdown-item" data-toggle="modal" data-target="#staff" href="#"><i class="fa fa-users"></i> Staff</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" data-toggle="modal" data-target="#profile" href="#"><i class="fa fa-user-o"></i> Profile</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="{{ route('logout') }}"
											onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">
												{{ __('Logout') }} <i class="fa fa-sign-out"></i>
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
										</div>
									</li>
								</li>
								</ul>
							</nav>
							<div class="hamburger ml-auto"><i class="fa fa-bars"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Logo -->
		<div class="logo_container_outer">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="logo_container">
							<a href="#">
								<div class="logo_content d-flex flex-column align-items-start justify-content-center">
									<div class="logo_line"></div>
									<div class="logo d-flex flex-row align-items-center justify-content-center">
										<div class="logo_text">Mbale<span>People's</span></div>
										<div class="logo_box">+</div>
									</div>
									<div class="logo_sub">Clinic and martenat home</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>

	</header>

