@extends('layouts.app')
@push('custom-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/services_responsive.css')}}">
@endpush

@section('content')

	<div class="home custom_home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/services.jpg" data-speed="0.8"></div>
		<div class="custom_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="custom_home_title">Services at</div>
							<div class="breadcrumbs">
								<h5>Mbale People's Clinic and Martenat Home</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h2>Our Featured Services</h2></div>
				</div>
			</div>
			<div class="row services_row">
				
				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_1.svg" alt=""></div>
							<div class="service_title trans_200">Free Checkups</div>
							<div class="service_text">
								<p>
									Come for a free checkup so that you know about your health status
									before its too late for the checkup....
								</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_2.svg" alt=""></div>
							<div class="service_title trans_200">Screening Exams</div>
							<div class="service_text">
								<p>
									This service is mostly for pregnant women, 
									come and have a look at your child before delivery
								</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_3.svg" alt=""></div>
							<div class="service_title trans_200">RMI Services</div>
							<div class="service_text">
								<p>
									This service is mostly for pregnant women, 
									come and have a look at your child before delivery,
									before its too late for the checkup....
								</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_4.svg" alt=""></div>
							<div class="service_title trans_200">Dentistry</div>
							<div class="service_text">
								<p>
									Here we can operate on your dental formular or 
									your tooth for it to function properly......
								</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_5.svg" alt=""></div>
							<div class="service_title trans_200">Neonatology</div>
							<div class="service_text">
								<p>
									Neonatology is a subspecialty of pediatrics that consists of the medical care of newborn infants, 
									especially the ill or premature newborn. It is a hospital-based specialty, 
									and is usually practiced in neonatal intensive care units
								</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="services.html">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_6.svg" alt=""></div>
							<div class="service_title trans_200">Biochemistry</div>
							<div class="service_text">
								<p>
									Biochemistry focuses on processes happening at a molecular level. 
									It focuses on what's happening inside our cells, 
									studying components like proteins, lipids and organelles.
								</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

@endsection