@extends('layouts.app')
@push('custom-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contact_responsive.css')}}">
@endpush
@section('content')

<div class="home custom_home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="custom_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="custom_home_title"><span>Contact</span> Us</div>
							<div class="breadcrumbs">
								<h5>Mbale People's Clinic and Martenat Home</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-6">
					<div class="section_title"><h2>Get in touch</h2></div>
					<div class="contact_text">
						<p>
							You can reach us using the information provided below please ......
							You can reach us using the information provided below please ......
							You can reach us using the information provided below please ......
						</p>
					</div>
					<ul class="footer_about_list">
						<li><div class="footer_about_icon"><img src="images/phone-call.svg" alt=""></div><span class="color-light">+256706263042</span></li>
						<li><div class="footer_about_icon"><img src="images/envelope.svg" alt=""></div><span class="color-light">office@mbaleclinic.com</span></li>
						<li><div class="footer_about_icon"><img src="images/placeholder.svg" alt=""></div><span class="color-light">Kumi Rd</span></li>
					</ul>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-6 form_col">
					<div class="contact_form_container">
						<form action="#" id="contact_form" class="contact_form">
							<div class="row">
								<div class="col-md-6 input_col">
									<div class="input_container input_name"><input type="text" class="contact_input" placeholder="Name" required="required"></div>
								</div>
								<div class="col-md-6 input_col">
									<div class="input_container"><input type="email" class="contact_input" placeholder="E-mail" required="required"></div>
								</div>
							</div>
							<div class="input_container"><input type="text" class="contact_input" placeholder="Subject" required="required"></div>
							<div class="input_container"><textarea rows="3" class="contact_input contact_text_area" placeholder="Message" required="required"></textarea></div>
							<button class="button contact_button"><a href="#">send</a></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection