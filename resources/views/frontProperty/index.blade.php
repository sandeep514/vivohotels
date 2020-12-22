@extends( 'frontProperty.master' )
@section('content')
    @php
        $amenities = json_decode($propertyDetail->amenities , true);
        $collectionAmenities = App\Models\Amenities::whereIn('id' , $amenities)->get();
    @endphp
    <!-- END head -->
    <style type="text/css">
        .owl-carousel.major-caousel .slider-item img{
            max-height: 550px
        }
        .lead{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 10;
            -webkit-box-orient: vertical;
        }
        .mouse{
            width: auto;
            left: 43%;
            background: white;
            border-radius: 13px;
        }
        .mouse > .mouse-icon ul li{
            padding: 3px 0px;
            font-size: 20px;
            margin-right: 40px;
        }
        .mouse > .mouse-icon ul{
            list-style: circle;
            display: inline-flex;
        }
        .mouse > .mouse-icon{
            width: 100%

        }
        .amenity .material-icons{
            font-size: 45px
        }
        .roomColor{
            color: #6c757d;
        }
        .roomColor ul{
            padding: 0;
            list-style: none
        }
        .roomColor a{
            color: #6c757d !important;
            font-size: 20px !important
        }

        .fixed-form {
            background: #ffffff;
            box-shadow: 0px 2px 9px 0px #00000029;
            opacity: 1;
            z-index: 99;
            border-radius: 20px;
            border: 1px solid #fba818;
            border-width: 5px 1px 5px 1px !important;
            max-width: 300px;
            width: 300px;
        }
        #listing {
            color: #212934 !important;
            font-size: 14px;
        }


        #listing .dates-row {
            height: 61px;
        }
        #listing .tdatepicker {
            background: #fff !important;
            border: 1.2px solid #8895a7 !important;
            padding: 0;
            height: 53px !important;
            margin-left: 15px;
            margin-right: 15px !important;
            margin: 25px 0 15px 15px !important;
            width: 91% !important;
        }
        .filterForm{
            border: 2px solid #ededed;
            border-radius: 5px;
            padding: 10px;
        }
        .addremove{
            padding: 0;
            list-style: none;
            display: inline-flex;
        }

        .addremove li{
            margin: 0 10px;
        }
        .addremove li.minValue{
            font-size: 22px;
            font-weight: 500;
            line-height: 1.5;
        }
        .appendedAmount{
            font-size: 60px;
            font-weight: 700;
            text-align: center;
        }
        .amount{
            width: 100%
        }
    </style>
    <section class="site-hero overlay" style="background-image: url(' {{ asset('property/'.$propertyDetail->id.'/'.$propertyDetail->propertyImage) }} ')" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade-up">
                    <h1 class="heading">Enjoy A Luxury <br> Experience</h1>
                </div>
            </div>
        </div>

        <a class="mouse smoothscroll" href="#next">
            <div class="mouse-icon">
                {{-- <span class="mouse-wheel"></span> --}}
                <div>
                    <ul>
                        <li>
                            {{ $propertyDetail->availableRooms }} Available Rooms
                        </li>
                        <li>
                            {{ $propertyDetail->max_guests }} Max Guests
                        </li>
                    </ul>
                </div>
            </div>
        </a>
        
    </section>

    <!-- END section -->

  {{--   <section class="section bg-light"  id="next">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mx-auto text-center mb-5">
            <h2 class="heading">Check Availabilty</h2>
          </div>
        </div>
        <div class="row">
          <div class="block-32">

            <form action="#">
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkout_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="adults" class="font-weight-bold text-black">Adults</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="adults" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="children" class="font-weight-bold text-black">Children</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="children" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <button class="btn btn-primary btn-block text-white">Check Availabilty</button>
                </div>
              </div>
            </form>
          </div>


        </div>
      </div>
    </section>
 --}}
    <section class="section bg-light" style="padding: 0px">
        <div class="container">
            {{-- <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <h2 class="heading" data-aos="fade-up">Amenities</h2>
                </div>
            </div> --}}

            <div class="row justify-content-center text-center pt-5 pb-5" data-aos="fade-up" data-aos-delay="300">
                <div class="col-md-4">
                    <p>
                    <div class="row amenity">
                        {{-- {{ dump($collectionAmenities) }}--}}
                        @foreach($collectionAmenities as $key => $amenity)
                            <div class="col">
                            <span class="material-icons" title="{{ $amenity->name }}">
                                {{ $amenity->icon }}
                            </span>
                                {{-- <h5> {{ $v->name }} </h5> --}}
                            </div>
                        @endforeach
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section" style="padding: 0px">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 col-lg-7" data-aos="fade-up">
                    <h2 class="heading">Welcome <em>to</em> {{ $propertyDetail->title }}.</h2>
                    <p class="lead">{!! $propertyDetail->description !!}</p>
                    {{-- <p class="mb-4">Nobis sunt architecto nulla voluptatem sed, beatae quia consequatur excepturi quisquam itaque optio eveniet, recusandae saepe accusantium harum, temporibus dolores officia. Aspernatur voluptatem vitae optio atque?</p> --}}
                    <p><a href="#" class="btn btn-primary text-white py-2 mr-3">Read More</a> 
                      {{-- <span class="mr-3">or</span> <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo">See video</a></p> --}}
                </div>
                <div class="col-md-12 col-lg-5" data-aos="fade-up">
                    {{-- <img src="{{ asset('propertyExtra/img/about_feature_image.png') }}" alt="Image" class="img-fluid"> --}}
                    <div class="filterForm">
                        <div class="formData">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="birthday" class="form-label">Stay From:</label>
                                    <input type="date" id="birthday" class="form-control timepicker" name="birthday">
                                </div>
                                <div class="col-md-6">
                                    <label for="birthday" class="form-label">Stay To:</label>
                                    <input type="date" id="birthday" class="form-control timepicker" name="birthday">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            Selected Person
                                        </div>
                                        <div class="col-md-4">

                                            <ul class="addremove">
                                                <li class="minusperson">
                                                    <span class="material-icons" style="padding: 5px;border: 2px solid #ededed;cursor: pointer;border-radius: 100%;font-size: 18px;">remove</span>
                                                </li>

                                                <li class="minValue">
                                                    {{ $propertyDetail->min_guests }}
                                                </li>
                                                
                                                <li class="plusvalue">
                                                    <span class="material-icons" style="padding: 5px;border: 2px solid #ededed;cursor: pointer;border-radius: 100%;font-size: 18px;">add</span>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="amount">
                                    {{-- <p>{{ $propertyDetail->regular_price }}</p> --}}
                                    <p class="appendedAmount">{{ $propertyDetail->offer_price }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <input type="hidden" class="allowedMinPerson" value="{{ $propertyDetail->min_guests }}">
    <input type="hidden" class="allowedMaxPerson" value="{{ $propertyDetail->max_guests }}">
    <input type="hidden" class="otherPersonPrice" value="{{ $propertyDetail->other_person_price }}">
    
    <section class="section bg-light" style="padding: 2em;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <h2 class="heading" data-aos="fade-up">About Property</h2>
            <p class="lead" data-aos="fade-up">{!! $propertyDetail->about_property !!}</p>
          </div>
         
        </div>
      {{-- {{ dd($propertyDetail) }} --}}
        <div class="site-block-half d-flex "  data-aos="fade-up" data-aos-delay="100">
          <div class="text" style="padding: 1em">
            <span class="d-block"><span class="display-4 text-primary" style="font-size: 40px">Before Buy</span> </span>
            {{-- <h2>Superior Room</h2> --}}
            <p class="lead">{!! $propertyDetail->before_buy !!}</p>
            {{-- <p><a href="#" class="btn btn-primary text-white">Book Now</a></p> --}}
          </div>
        </div>
        <div class="site-block-half d-flex "  data-aos="fade-up" data-aos-delay="100">
          <div class="text" style="padding: 1em;width: 100%;text-align: justify;">
            <span class="d-block">
                <span class="display-4 text-primary" style="font-size: 40px">About The Property</span> 
            </span>
            
            <h2 style="font-size: 18px"> Check-In and Check-Out: </h2>
            <p class="lead"> {{ $propertyDetail->timmingFrom }} - {{ $propertyDetail->timmingTo }} </p>

            <h2 style="font-size: 18px">About Meal: </h2>
            <p class="lead">{!! $propertyDetail->about_meal !!}</p>
            
            <h2 style="font-size: 18px">About the Locality: </h2>
            <p class="lead">{!! $propertyDetail->description !!}</p>

            <h2 style="font-size: 18px">Cancellation Policy:</h2>
            <p class="lead">
                <a href="{{ asset('property/'.$propertyDetail->id.'/'.$propertyDetail->cancellation_pdf) }}" target="_blank">Strict</a>
            </p>

          </div>
        </div>

   

       {{--  <div class="site-block-half d-flex bg-white" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="image d-block bg-image order-2" style="background-image: url('img/img_2.jpg');"></a>
          <div class="text order-1">
            <span class="d-block"><span class="display-4 text-primary">$299</span> / per night </span>
            <h2>Presidential Room</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis cupiditate deserunt repellendus autem! Incidunt, cupiditate minus ad ipsam eos laudantium eum harum ut consequatur eligendi, accusantium reprehenderit quo saepe neque.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis cupiditate deserunt repellendus autem! Incidunt, cupiditate minus ad ipsam eos laudantium eum harum ut consequatur eligendi, accusantium reprehenderit quo saepe neque.</p>
            <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
          </div>
        </div> --}}

        {{-- <div class="row justify-content-center text-center mt-5" data-aos="fade-up" data-aos-delay="300">
          <div class="col-md-4"><p><a href="#" class="btn btn-primary text-white py-3 px-5">View All Rooms</a></p></div>
        </div> --}}
      </div>
    </section>

{{--     <section class="section slider-section" style="padding: 1em">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8">
                <h2 class="heading" data-aos="fade-up">See The Gallery</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                </p>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
                @php
                    $otherImages = json_decode(@$propertyDetail->otherImages);
                @endphp

                @if( $otherImages != null )
                    @foreach( $otherImages as $k => $v )            
                        <div class="slider-item">
                            <img src="{{ asset( 'property/'.$propertyDetail->id.'/'.$v ) }}" alt="Image placeholder" class="img-fluid">
                        </div>
                    @endforeach
                @endif
            </div>
          </div>

        
        </div>
      </div>
    </section> --}}
    <!-- END section -->
    <!-- END section -->
    <section class="section testimonial-section" style="padding: 1em">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Our Gallery</h2>
          </div>
        </div>


        
        <div class="row">
            <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
                @php
                    $otherImages = json_decode(@$propertyDetail->otherImages);
                @endphp

                @if( $otherImages != null )
                    @foreach( $otherImages as $k => $v )
                        <div class="testimonial text-center slider-item">
                           <blockquote>
                                <img src="{{ asset( 'property/'.$propertyDetail->id.'/'.$v ) }}">
                            </blockquote>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

      </div>
    </section>

    {{-- faq --}}
    <section class="section testimonial-section" style="padding: 1em">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <h2 class="heading" data-aos="fade-up"></h2>
                </div>
            </div>
            
            <p style="text-align: center;">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    FAQ
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                @foreach( $propertyDetail->PropertyFAQ as $k => $v )
                    @if( $v->getAnswers != null )
                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" style="text-transform: capitalize;" href="#collapseExample_{{ $k }}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                {{ $v->getAnswers->question }}
                            </a>
                        </p>

                        <div class="collapse" id="collapseExample_{{ $k }}">
                            <div class="card card-body" style="border-radius: 10px;margin-bottom: 10px;padding: 5px 10px;text-transform: capitalize;">
                                {{ $v->amswer }}
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    
    <section class="section blog-post-entry bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <h2 class="heading" data-aos="fade-up">Sleeping Arrangements</h2>
                    {{-- <p class="lead" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p> --}}
                </div>
            </div>
            <div class="row">
                @foreach( $propertyDetail->PropertyRooms as $k => $v)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

                        <div class="media media-custom d-block mb-4">
                            {{-- <a href="#" class="mb-4 d-block"><img src="{{ asset('propertyExtra/img/img_1.jpg')}}" alt="Image placeholder" class="img-fluid"></a> --}}
                            <div class="media-body">
                                <span class="meta-post">{{ $v->title }}</span>
                                <h2 class="mt-0 mb-3 roomColor">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                {{ $v->no_of_double_bedrooms }} x <span class="material-icons" style="vertical-align: middle;">king_bed</span> Double bed
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                {{ $v->no_of_single_beds }} x <span class="material-icons" style="vertical-align: middle;">single_bed</span> Single bed
                                            </a>
                                        </li>
                                    </ul>
                                    <p style="font-size: 15px ; overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">{{ ucFirst($v->room_about_property) }}</p>
                                </h2>
                            </div>
                        </div>

                    </div>
                @endforeach


            </div>
        </div>
    </section>

    {{-- <section class="section border-top">
      <div class="container" >
        <div class="row align-items-center">
          <div class="col-md-6" data-aos="fade-up">
            <h2>Make Yourself Comfortable in Any of Our Fully Air-conditioned Rooms</h2>
          </div>
          <div class="col-md-6 text-right" data-aos="fade-up" data-aos-delay="200">
            <a href="reservation.html" class="btn btn-primary py-3 text-white px-5">Reserve Now</a>
          </div>
        </div>
      </div>
    </section> --}}

    @section('javascript')
        <script type="text/javascript">
            $(document).ready(function(){
                var currentValue = $('.minValue').html().trim(' ');
                var allowedMinPerson = $('.allowedMinPerson').val();
                var allowedMaxPerson = $('.allowedMaxPerson').val();
                var otherPersonPrice = $('.otherPersonPrice').val();

                if( currentValue == allowedMinPerson ){
                    $('.minusperson').hide();
                }

                if( currentValue == allowedMaxPerson ){
                    $('.plusvalue').hide();
                }

                $('.minusperson').click(function(){
                    var currentValue = $('.minValue').html().trim(' ');
                    var updatedperson = (parseInt(currentValue)-1);
                    let appendedAmount = $('.appendedAmount').html();
                    $('.appendedAmount').html( (parseInt(appendedAmount) - parseInt(otherPersonPrice)) );

                    $('.minValue').html(updatedperson);
                    if( currentValue > allowedMinPerson ){
                        $('.minusperson').hide();
                    }
                    if( updatedperson > allowedMinPerson ){
                        $('.plusvalue').show();
                    }
                });

                $('.plusvalue').click(function(){
                    var currentValue = $('.minValue').html().trim(' ');
                    var updatedperson = (parseInt(currentValue)+1);
                    let appendedAmount = $('.appendedAmount').html();
                    $('.appendedAmount').html( (parseInt(appendedAmount)+parseInt(otherPersonPrice)) );

                    $('.minValue').html(updatedperson);

                    if( updatedperson == allowedMaxPerson ){
                        $('.plusvalue').hide();
                    }

                    if( updatedperson < allowedMaxPerson ){
                        $('.minusperson').show();
                    }
                });
            })
        </script>
    @endsection
@endsection
