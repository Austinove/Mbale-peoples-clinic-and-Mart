@extends('layouts.app')

@section('content')
	<!-- Home -->
	<div class="home">
		<div class="home_slider_container">
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item">
                    <div class="home_slider_background" style="background-image: url(images/home_background_1.jpg)"></div>
					<div class="home_content">
						<div class="container">
							<div class="row justify-content-md-center">
								<div class="col">
									<div class="home_content_inner">
										<div class="home_title"><h1>Meet the perfect doctors</h1></div>
										<div class="home_text">
											<p>
												Need to recover quickly from sickness, meet the best doctors
												in Mbale People's Clinic and Martenat Home
											</p>
										</div>
											<div class="button btn-slide cta_button"><a href="#">request for a health plan</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_background_1.jpg)"></div>
					<div class="home_content">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content_inner">
										<div class="home_title"><h1>Affordable medication in our hospital</h1></div>
										<div class="home_text">
											<p>
												All healthy care services are done at the lowest price ever
												here in Mbale People's Clinic and Martenat Home
											</p>
										</div>
											<div class="button btn-slide cta_button"><a href="#">request for a health plan</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_background_1.jpg)"></div>
					<div class="home_content">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content_inner">
										<div class="home_title"><h1>Free healthy checkup is acceptable here</h1></div>
										<div class="home_text">
											<p>
												Come and check your self at no cost. Come and know what would be disturbing
												your wellfare with free consultation from our doctors
											</p>
										</div>
											<div class="button btn-slide cta_button"><a href="#">request for a health plan</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			

			<!-- Slider Progress -->
			<div class="home_slider_progress"></div>
		</div>
	</div>

	<!-- 3 Boxes -->

	<div class="boxes">
		<div class="container">
			<div class="row">
				
				<!-- Box -->
				<div class="col-lg-4 box_col">
					<div class="box working_hours">
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width:29px; height:29px;"><img src="images/alarm-clock.svg" alt=""></div></div>
						<div class="box_title">Working Hours</div>
						<div class="working_hours_list">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Monday – Friday</div>
									<div class="ml-auto">8.00 – 19.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Saturday</div>
									<div class="ml-auto">9.30 – 17.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Sunday</div>
									<div class="ml-auto">9.30 – 15.00</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Box -->
				<div class="col-lg-4 box_col">
					<div class="box box_appointments">
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 29px; height:29px;"><img src="images/phone-call.svg" alt=""></div></div>
						<div class="box_title">Appointments</div>
						<div class="box_text">
							Schedule time to meet our doctors for consultation and also make your 
							recover at the quickest time possible
						</div>
					</div>
				</div>

				<!-- Box -->
				<div class="col-lg-4 box_col">
					<div class="box box_emergency">
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 37px; height:37px; margin-left:-4px;"><img src="images/bell.svg" alt=""></div></div>
						<div class="box_title">Emergency Cases</div>
						<div class="box_phone">+56 273 45678 235</div>
						<div class="box_emergency_text">
							For any emergency please call the above number 
							so that we can reach you with our ambulance as early as possible
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- About Content -->
				<div class="col-lg-7">
					<div class="about_content">
						<div class="section_title"><h2>A great medical team to help your needs</h2></div>
						<div class="about_text">
							<p>
								Come for free consultations from our doctors because they are made to serve you.
								Consultation and checkup is free of charge here and never delay to come and 
								know your healthy status...
								Come for free consultations from our doctors because they are made to serve you.
								Consultation and checkup is free of charge here and never delay to come and 
								know your healthy status...
							</p>
						</div>
						<div class="button about_button">
							<a href="#">read more</a>
						</div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-5">
					<div class="about_image"><img height="70%" width="70%" src="images/about.png" alt=""></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Departments -->

	<div class="departments">
		<div class="departments_background parallax-window" data-parallax="scroll" data-image-src="images/departments.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title section_title_light"><h2>Our Medical Departments</h2></div>
				</div>
			</div>
			<div class="row departments_row row-md-eq-height">
				
				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="images/dept_1.jpg" alt=""></div>
						<div class="dept_content text-center">
							<div class="dept_title">plastic surgery</div>
							<div class="dept_subtitle">Dr. James Smith</div>
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="images/dept_2.jpg" alt=""></div>
						<div class="dept_content text-center">
							<div class="dept_title">gastroenterology</div>
							<div class="dept_subtitle">Dr. Gunter Roscoe</div>
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="images/dept_3.jpg" alt=""></div>
						<div class="dept_content text-center">
							<div class="dept_title">dentistry</div>
							<div class="dept_subtitle">Dr. Maria Williams</div>
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_text">
							<p>
								Mbale People's Clinic and Martenat Home has many departments that
								can help you to recover to your best healthy status.
								Feel free to come for help in any of the departents. 
								These are the departments: Gastroenterology, Dentistry, Plastic sugery,
								Martenate ward, Children ward .....
							</p>
						</div>
						<div class="button dept_button"><a href="#">read more</a></div>
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

	<!-- Call to action -->

	{{-- <div class="cta">
		<div class="cta_background parallax-window" data-parallax="scroll" data-image-src="images/cta.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content text-center">
						<h2>Need a personal health plan?</h2>
						<p>Duis massa massa, mollis vel ullamcorper quis, finibus et urna. Aliquam ac eleifend metus. Ut sollicitudin risus ex</p>
						<div class="button cta_button"><a href="#">request a plan</a></div>
					</div>
				</div>
			</div>
		</div>		
	</div> --}}

@endsection