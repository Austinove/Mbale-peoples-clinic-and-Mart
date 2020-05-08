@extends('layouts.app')
@push('custom-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/news_responsive.css')}}">
@endpush
@section('content')

<div class="home custom_home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>
		<div class="custom_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="custom_home_title"><span>News</span> in</div>
							<div class="breadcrumbs">
								<h5>Mbale People's Clinic and Martenat Home</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Posts -->
				<div class="col-lg-8">
					
					{{-- fetch news from jQuery --}}
					<div class="news_posts"></div>
				</div>

				

				<!-- Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Search -->
						<div class="sidebar_search">
							<form action="#" id="sidebar_search_form" class="sidebar_search_form">
								<input type="text" class="search_input" placeholder="Search" required="required">
								<button class="search_button"><img src="images/search.png" alt=""></button>
							</form>
						</div>

						<!-- Categories -->
						<div class="departments_row sidebar_section">
							<div class="sidebar_section_title">
								<div class="sidebar_title colors">Categories</div>
							</div>
							<ul class="color-light">
								<li><a href="#">Medical Articles</a></li>
								<li><a href="#">Therapy</a></li>
								<li><a href="#">Useful Information</a></li>
								<li><a href="#">Uncategorized</a></li>
							</ul>
						</div>

						<!-- Archives -->
						<div class="departments_row sidebar_archives sidebar_section">
							<div class="sidebar_section_title colors">
								<div class="sidebar_title">Archives</div>
							</div>
							<ul>
								<li><a href="#">December 2017</a></li>
								<li><a href="#">January 2018</a></li>
								<li><a href="#">February 2018</a></li>
								<li><a href="#">March 2018</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>


@endsection