<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<style>
	.colorred{
		color: red
	}
	.colorgreen{
		color: green
	}
	.error{
		color: red
	}
	.error strong{
		color: red
	}
</style>
@include('front/components/header')
  <body>

    @include('front/components/menu')

	@if (Session::has('message'))
		<div class="toast activeToast">
			<div class="toast-body">
				{{ Session::get('message') }}
			</div>
		</div>
	@endif
	
	@if (Session::has('error'))
		<div class="toast errorToast">
			<div class="toast-body">
				{{ Session::get('error') }}
			</div>
		</div>
    @endif

	@yield('content')

    @include('front/components/footer')



  	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
		</svg>
	</div>


 	@include('front/components/script')
 	@yield('javascript')
  </body>
</html>
