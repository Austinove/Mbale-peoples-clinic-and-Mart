@extends('layouts.app')
@push('custom-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/about_responsive.css')}}">
@endpush
@section('content')

<div class="home custom_home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
		<div class="custom_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="custom_home_title">About <span>Us</span></div>
							<div class="breadcrumbs">
								<h5>Mbale People's Clinic and Martenat Home</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">

				<!-- About Content -->
				<div class="col-lg-8">
					<div class="section_title"><h2>Mbale People's Clinic and Martenat Home</h2></div>
					<div class="about_text">
						<p> 
							Is a great hospital located in mbale Kumi Rd, near IUIU University.
							All medical serices are performed within this Hospital
							Is a great hospital located in mbale Kumi Rd, near IUIU University.
							All medical serices are performed within this Hospital
						</p>
						<p>
							Is a great hospital located in mbale Kumi Rd, near IUIU University.
							All medical serices are performed within this Hospital
							Is a great hospital located in mbale Kumi Rd, near IUIU University.
							All medical serices are performed within this Hospital
							Is a great hospital located in mbale Kumi Rd, near IUIU University.
							All medical serices are performed within this Hospital
						</p>
					</div>
					<div class="row loaders_container">
						<div class="col-md-3 loader_col">
							<!-- Loader -->
							<div class="loader" data-perc="0.75"><span>Hard Work</span></div>
						</div>
						<div class="col-md-3 loader_col">
							<!-- Loader -->
							<div class="loader" data-perc="0.95"><span>Passion</span></div>
						</div>
						<div class="col-md-3 loader_col">
							<!-- Loader -->
							<div class="loader" data-perc="0.75"><span>Hard Work</span></div>
						</div>
						<div class="col-md-3 loader_col">
							<!-- Loader -->
							<div class="loader" data-perc="0.95"><span>Passion</span></div>
						</div>
					</div>
					<div class="button about_button"><a href="#">read more</a></div>
				</div>

				<!-- Boxes -->
				<div class="col-lg-4 boxes_col">

					<!-- Box -->
					<div class="box box_appointments">
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 29px; height:29px;"><img src="images/phone-call.svg" alt=""></div></div>
						<div class="box_title">Appointments</div>
						<div class="box_text">
							Schedule time to meet our doctors for consultation and also make your 
							recover at the quickest time possible
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title section_title_light"><h2>Patient Testimonials</h2></div>
				</div>
			</div>
			<div class="row test_row">
				
				<!-- Testimonial -->
				<div class="col-lg-6 test_col">
					<div class="testimonial">
						{{-- <div class="test_icon d-flex flex-column align-items-center justify-content-center"><img src="images/quote.png" alt=""></div> --}}
						<div class="test_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin. Aliquam nec dap ibus massa. Pellen tesque in luctus ex. Praesent luctus erat sit amet torto.</div>
						<div class="departments_row d-flex flex-row align-items-center justify-content-start">
							<div class="test_author_image"><div><img src="images/test_1.jpg" alt=""></div></div>
							<div class="px-2 test_author_name"><a href="#">Claire Smith</a>, <span>Patient</span></div>
						</div>
					</div>
				</div>

				<!-- Testimonial -->
				<div class="col-lg-6 test_col">
					<div class="testimonial">
						{{-- <div class="test_icon d-flex flex-column align-items-center justify-content-center"><img src="images/quote.png" alt=""></div> --}}
						<div class="test_text">Slor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin. Aliquam nec dap ibus massa. Pellen tesque in luctus ex. Praesent luctus erat sit amet tortor aliquam bibendum.</div>
						<div class="departments_row d-flex flex-row align-items-center justify-content-start">
							<div class="test_author_image"><div><img src="images/test_2.jpg" alt=""></div></div>
							<div class="px-2 test_author_name"><a href="#">Mick Williams</a>, <span>Patient</span></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h2>Meet Our Medical Team</h2></div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Member -->
				<div class="col-lg-3 team_col">
					<div class="team_member">
						<div class="d-flex flex-column align-items-center justify-content-end">
							<img height="150px" src="images/team_1.png" alt="">
						</div>
						<div class="team_member_info">
							<div><a class="dept_title" href="#">Dr. Melissa Smith</a></div>
							<div class="dept_subtitle">Cardiologist</div>
						</div>
					</div>
				</div>

				<!-- Team Member -->
				<div class="col-lg-3 team_col">
					<div class="team_member">
						<div class="d-flex flex-column align-items-center justify-content-end">
							<img height="150px" src="images/team_2.png" alt="">
						</div>
						<div class="team_member_info">
							<div><a class="dept_title" href="#">Dr. Josh Henderson</a></div>
							<div class="dept_subtitle">Plastic Surgeon</div>
						</div>
					</div>
				</div>

				<!-- Team Member -->
				<div class="col-lg-3 team_col">
					<div class="team_member">
						<div class="d-flex flex-column align-items-center justify-content-end">
							<img height="150px" src="images/team_3.png" alt="">
						</div>
						<div class="team_member_info">
							<div><a class="dept_title" href="#">Dr. Christinne Jones</a></div>
							<div class="dept_subtitle">Pediatrist</div>
						</div>
					</div>
				</div>

				<!-- Team Member -->
				<div class="col-lg-3 team_col">
					<div class="team_member">
						<div class="d-flex flex-column align-items-center justify-content-end">
							<img height="150px" src="images/team_4.png" alt="">
						</div>
						<div class="team_member_info">
							<div><a class="dept_title" href="#">Dr. William Stan</a></div>
							<div class="dept_subtitle">General Practicioner</div>
						</div>
					</div>
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