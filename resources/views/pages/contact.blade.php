@extends('layouts.app')
@push('custom-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contact_responsive.css')}}">
@endpush
@section('content')

<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>CareMed</span> News</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="#">Home</a></li>
									<li>Contact</li>
								</ul>
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
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin. Aliquam nec dapibus massa.</p>
					</div>
					<ul class="contact_about_list">
						<li><div class="contact_about_icon"><img src="images/phone-call.svg" alt=""></div><span>+45 677 8993000 223</span></li>
						<li><div class="contact_about_icon"><img src="images/envelope.svg" alt=""></div><span>office@template.com</span></li>
						<li><div class="contact_about_icon"><img src="images/placeholder.svg" alt=""></div><span>Main Str. no 45-46, b3, 56832, Los Angeles, CA</span></li>
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
							<div class="input_container"><textarea class="contact_input contact_text_area" placeholder="Message" required="required"></textarea></div>
							<button class="button contact_button"><a href="#">send</a></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection