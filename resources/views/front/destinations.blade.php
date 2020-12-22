@extends('front/components/master')
@section('content')
	<style type="text/css">
		.hero-wrap{
		    height: 200px;
		}
		.hero-wrap .slider-text{
		    height: 230px;
		}
		.ftco-section{
			padding: 3em 0
		}
	</style>
	<div class="hero-wrap" style="background-image: url({{asset('front/images/bg_3.jpg')}});">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
					<div class="text">
					  	<h1 class="mb-4 bread">Destinations</h1>
				  	</div>
				</div>
			</div>
		</div>
	</div>

  <section class="ftco-section ftco-no-pb ftco-room">
	  <div class="container-fluid px-0">
		  <div class="row no-gutters justify-content-center mb-5 pb-3">
		<div class="col-md-7 heading-section text-center ftco-animate">
			<span class="subheading">Find your dream Rooms</span>
		  <!--<h2 class="mb-4">Hotel Masters Rooms</h2>-->
		</div>
	  </div>  
		  <div class="row no-gutters">
		      
            @if( $property->count() > 0 )
		        @foreach($property as $k => $v)
    			  	<div class="col-lg-6">
    				  	<div class="room-wrap d-md-flex ftco-animate">
    						<a href="#" class="img" style="background-image: url(' {{ asset( 'property/'.$v->id.'/'.$v->propertyImage )}} ');"></a>
    						<div class="half left-arrow d-flex align-items-center">
    						  	<div class="text p-4 text-center">
    								<p class="star mb-0">
    									<span class="ion-ios-star"></span>
    									<span class="ion-ios-star"></span>
    									<span class="ion-ios-star"></span>
    									<span class="ion-ios-star"></span>
    									<span class="ion-ios-star"></span>
    								</p>
    								<p class="mb-0">
    									<span class="price mr-1">₹{{ $v->offer_price }}</span>
    									<span class="per">{{ $v->min_might_stay }} night</span>
    								</p>
    								<h3 class="mb-3">
    									<a href="rooms.html">{{ strtoupper($v->title) }}</a>
    								</h3>
    								<p class="pt-1">
    									<a href="{{ route( 'room.details' , base64_encode($v->id) ) }}" class="btn-custom px-3 py-2 rounded">View Details 
    										<span class="icon-long-arrow-right"></span>
    									</a>
    								</p>
    						  	</div>
    					  	</div>
    				  	</div>
    			  	</div>
    		  	@endforeach  
            @endif
		  	
		  	
		  	@if( $property->count() == 0 )
		  	    <p style="width: 100%;text-align: center">No Property found</p>
		  	@endif
{{-- 			  <div class="col-lg-6">
				  <div class="room-wrap d-md-flex ftco-animate">
					  <a href="#" class="img" style="background-image: url({{asset('front/images/room-1.jpg')}});"></a>
					  <div class="half left-arrow d-flex align-items-center">
						  <div class="text p-4 text-center">
							  <p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
							  <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p>
							  <h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
							  <p class="pt-1"><a href="rooms-single.html" class="btn-custom px-3 py-2 rounded">View Details <span class="icon-long-arrow-right"></span></a></p>
						  </div>
					  </div>
				  </div>
			  </div>
 --}}
		  </div>
	  </div>
  </section>


@endsection