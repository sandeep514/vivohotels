@extends('propertyAdmin.component.master')
@section('content')
    <style>
        .questionssec {
            list-style: none;
        }

        .card .card-body .col-form-label, .card .card-body .label-on-right {
            padding: 17px 5px 0 0;
            text-align: center;
        }

        .propertyOtherImages {
            float: left;
            width: 20%
        }

        .propertyOtherImages li {
            list-style: none;
        }
    </style>
    <div class="content">
        <div class="content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header card-header-rose card-header-text">
                            <div class="card-text">
                                <h4 class="card-title">Add New Property</h4>
                            </div>
                        </div>
                        <div class="card-body ">
                            <form method="POST" action="{{ route('property.submit.property') }}"
                                  class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Property Name</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <input type="text" name="title" value="" class="form-control">
                                            <span class="bmd-help">Add your property name.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Number</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <input type="number" name="mobile" value=""
                                                   class="form-control">
                                            <span class="bmd-help">Add your property number.</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Location</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <input type="text" name="location" value="" class="form-control">
                                            <span class="bmd-help">Add your property Location.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">City</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <select name="city" class="form-control">
                                                @foreach( $city as $k => $v )
                                                    <option value="{{ $v->id }}"> {{ $v->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">No of Bedrooms</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <input type="number" name="no_of_bedrooms" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 additionalBedroomDetails">


                                    </div>
                                </div>
                                <div>
                                    {{-- <div class="row">
                                        <label class="col-sm-2 col-form-label">No of double Beds</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <input type="number" name="no_of_double_beds"
                                                       value=" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">No of Single Beds</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <input type="number" name="no_of_single_beds"
                                                       value=" class="form-control">
                                            </div>
                                        </div>
                                    </div> --}}


                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Property Category</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <select name="propertyCategory" class="form-control">
                                                    @foreach( $PropertyCategory as $k => $v )
                                                        <option value="{{ $v->id }}"> {{ $v->title }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">About your property</label>
                                        <div class="col-lg-10 col-md-10 col-sm-3">
                                            <textarea class="form-control" name="about_property"></textarea>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Extra Description</label>
                                        <div class="col-lg-10 col-md-10 col-sm-3">
                                            <textarea class="form-control" name="add_description"></textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Things to know before booking:</label>
                                        <div class="col-lg-10 col-md-10 col-sm-3">
                                            <textarea class="form-control" name="before_buy"></textarea>
                                            <span class="bmd-help">You can add details about your property spec.</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">About Meals</label>
                                        <div class="col-lg-10 col-md-10 col-sm-3">
                                            <textarea class="form-control" name="about_meal"></textarea>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Cancellation Policy</label>
                                        <div class="col-lg-10 col-md-10 col-sm-3">
                                            <input type="file" name="cancelPolicy" class="form-control">
                                            @if( $errors->has('cancelPolicy') )
                                                <span class="error"> {{ $errors->first('cancelPolicy') }} </span>
                                            @endif
                                            <a href=""
                                               download>Old Cancel Policy</a>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="offset-2 col-md-4">
                                            <div class="row">
                                                <label class="col-sm-4 col-form-label">Check-In Time</label>
                                                <div class="col-lg-10 col-sm-3">
                                                    <input type="text" class="form-control timepicker"
                                                           name="timmingFrom" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="row">
                                                <label class="col-sm-12  col-form-label" style="text-align: left">Check-Out
                                                    Time</label>
                                                <div class="col-lg-10 col-md-10 col-sm-3">
                                                    <input type="text" class="form-control timepicker" value=""
                                                           name="timmingTo">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 mt-4">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox" name="availability">
                                                    <span class="toggle"></span>
                                                    Availability
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                        <label class="col-sm-2 col-form-label">Available Rooms</label>
                                        <div class="col-lg-10 col-md-10 col-sm-3">
                                            <input type="number" name="availableRooms" value=" class="form-control">
                                        </div>
                                    </div> --}}


                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Min Nights stay</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <input type="number" name="min_might_stay" value=""
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Min guests Required</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <input type="number" name="min_guests" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Max guests allowed</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <input type="number" name="max_guests" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Regular Price</label>
                                        <div class="col-lg-10 col-md-10 col-sm-3">
                                            <input type="text" name="regular_price" value="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Offer Price</label>
                                        <div class="col-lg-10 col-md-10 col-sm-3">
                                            <input type="text" name="offer_price" value="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Additional Person Stay Price</label>
                                        <div class="col-lg-10 col-md-10 col-sm-3">
                                            <input type="text" name="other_person_price" value="" class="form-control">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Property Rating</label>
                                        <div class="col-lg-10 col-md-10 col-sm-3">
                                            <select name="propertyRaiting" class="form-control" id="" value="">
                                                <option value="1"> 1 Star</option>
                                                <option value="2"> 2 Star</option>
                                                <option value="3"> 3 Star</option>
                                                <option value="4"> 4 Star</option>
                                                <option value="5"> 5 Star</option>
                                                <option value="6"> 6 Star</option>
                                                <option value="7"> 7 Star</option>
                                                <option value="8"> 8 Star</option>
                                                <option value="9"> 9 Star</option>
                                                <option value="10"> 10 Star</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Property Image</label>
                                        <div class="col-lg-10 col-md-10 col-sm-3">
                                            <input type="file" name="propertyImage" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Other Images</label>
                                        <div class="col-lg-10 col-md-10 col-sm-3">
                                            <input type="file" name="otherImages[]" class="form-control" multiple>
                                        </div>
                                    </div>

                                    <div class="card ">
                                        <div class="card-header card-header-rose card-header-text">
                                            <div class="card-text">
                                                <h4 class="card-title">Answer all FAQ</h4>
                                            </div>
                                        </div>

                                        <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <ul class="questionssec">
                                                            <li>
                                                                <label
                                                                    class="col-form-label">Question </label>
                                                            </li>
                                                            <li>
                                                                <input type="text"
                                                                       name="question[]"
                                                                       value=""
                                                                       class="form-control">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('javascript')
    <script src='https://cdn.ckeditor.com/4.15.0/basic/ckeditor.js'></script>
    <script type='text/javascript'>
        $(document).ready(function () {
            md.initFormExtendedDatetimepickers();
            if ($('.slider').length !== 0) {
                md.initSliders();
            }
            CKEDITOR.replace('about_property');
            CKEDITOR.replace('before_buy');
            CKEDITOR.replace('about_meal');
            CKEDITOR.replace('add_description');


            $(document).on('keyup', 'input[name=no_of_bedrooms]', function () {
                $('.additionalBedroomDetails').html('');
                var loopEnd = $(this).val();
                console.log(loopEnd);
                for (let i = 1; i <= loopEnd; i++) {
                    let appendedData = $('.appendedData').html();
                    $('.additionalBedroomDetails').append('<div class="card "><div class="card-header card-header-rose card-header-text"><div class="card-text"><h4 class="card-title" style="float: left">Bedroom ' + i + ' </h4><div class="col-md-3" style="float: right;"><div class="togglebutton"><label><input type="checkbox" name="room[' + i + '][room_availability]"><span class="toggle"></span>     </label></div></div></div></div><div class="card-body "><div class="row"> <label class="col-sm-2 col-form-label">Title</label> <div class="col-sm-10"> <div class="form-group"> <input type="text" name="room[' + i + '][title]" class="form-control"> </div> </div> </div> <div class="row"> <label class="col-sm-2 col-form-label">No of Double Bed</label> <div class="col-sm-10"> <div class="form-group"> <input type="number" name="room[' + i + '][no_of_double_bedrooms]" class="form-control"> </div> </div> </div> <div class="row"> <label class="col-sm-2 col-form-label">No of Single Beds</label> <div class="col-sm-10"> <div class="form-group"> <input type="number" name="room[' + i + '][no_of_single_beds]" class="form-control"> </div> </div> </div> <div class="row"> <label class="col-sm-2 col-form-label">Select Amenities</label> <div class="col-md-10" style="margin-top: 15px"> <div class="row"><?php foreach( $amenities as $k => $v ){ ?> <div class="col-lg-4 col-md-4 col-sm-3"> <div class="form-check"> <label class="form-check-label"> <input class="form-check-input" type="checkbox" name="room[' + i + '][amenities][]" value="<?php echo $v->id; ?>"> <?php echo $v->name; ?> <span class="form-check-sign"> <span class="check"></span> </span> </label> </div> </div> <?php } ?> </div> </div> </div> <div class="row"><label class="col-sm-2 col-form-label">About your property</label><div class="col-lg-10 col-md-10 col-sm-3"><textarea class="form-control" name="room[' + i + '][room_about_property]" rows="5"></textarea></div></div>  </div></div>');
                }

            });
        });

    </script>
    @endsection
@endsection
