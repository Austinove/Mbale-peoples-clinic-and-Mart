@extends('layouts.app')
@section('content')
	<div class="about">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- About Content -->
				<div class="col-lg-9 ml-auto mr-auto" style="margin-top: 135px">
					<div class="about_content">
                        <div class="section_title"><h2>Requested Appointments</h2></div>
                        <div class="apt-details mt-20">
                            <table class="table">
                                {{-- Getting Appointments from jQuery --}}
                                <tbody class="appointments-table">
                                </tbody>
                            </table>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection