@extends('front/components/master')
@section('content')
<div class="hero-wrap" style="background-image: url({{ asset('front/images/bg_3.jpg') }});">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
		<div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
			<div class="text">
			  <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index-2.html">Home</a></span> <span>Contact Us</span></p>
			  <h1 class="mb-4 bread">Contact Us</h1>
		  </div>
		</div>
	  </div>
	</div>
  </div>

<section class="ftco-section contact-section bg-light">
	<div class="container">
		<div class="row d-flex mb-5 contact-info">
			<div class="col-md-12 mb-4">
				<h2 class="h3">Contact Information</h2>
			</div>
			<div class="w-100"></div>
			<div class="col-md-3 d-flex">
				<div class="info rounded bg-white p-4">
					<p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
				</div>
			</div>
			<div class="col-md-3 d-flex">
				<div class="info rounded bg-white p-4">
					<p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
				</div>
			</div>
			<div class="col-md-3 d-flex">
				<div class="info rounded bg-white p-4">
					<p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
				</div>
			</div>
			<div class="col-md-3 d-flex">
				<div class="info rounded bg-white p-4">
					<p><span>Website</span> <a href="#">yoursite.com</a></p>
				</div>
			</div>
		</div>
	  	<div class="row block-9">
			<div class="col-md-6 order-md-last d-flex">
				<form action="{{ route('contact.us') }}" class="bg-white p-5 contact-form" method="post">
					{{--  <div class="colorgreen">
						<p><strong>NOTE:</strong> All fields are required.</p>
					</div>  --}}
					{{ csrf_field() }}
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Your Name*" >
					</div>
					@if ($errors->has('name'))
						<span class="error">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
					@endif
					
					<div class="form-group">
						<input type="text" class="form-control" name="email" placeholder="Your Email*" >
					</div>
					@if ($errors->has('email'))
						<span class="error">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
					
					<div class="form-group">
						<input type="number" class="form-control" name="mobile" placeholder="Contact Number*" >
					</div>
					@if ($errors->has('mobile'))
						<span class="error">
							<strong>{{ $errors->first('mobile') }}</strong>
						</span>
					@endif
					
					<div class="form-group">
						<textarea cols="30" rows="7" name="message" class="form-control" placeholder="Message*" ></textarea>
					</div>
					@if ($errors->has('message'))
						<span class="error">
							<strong>{{ $errors->first('message') }}</strong>
						</span>
					@endif

					<div class="form-group">
						<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
					</div>
				</form>
			
			</div>

			<div class="col-md-6 d-flex">
				<div id="map" class="bg-white"></div>
			</div>
	  	</div>
	</div>
</section>

@endsection