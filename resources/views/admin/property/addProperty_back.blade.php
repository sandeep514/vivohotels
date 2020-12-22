@extends('admin.master')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="card">
                                {{--  <div class="card-header">
                                    <h5>Basic Form Inputs</h5>
                                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                    <div class="card-header-right">
                                        <i class="icofont icofont-spinner-alt-5"></i>
                                    </div>
                                </div>  --}}
                                <div class="card-block">
                                    <h4 class="sub-title">Add New Property</h4>

                                    <form method="POST" action="{{ route('admin.submit.new.property') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="title" name="title" class="form-control" placeholder="Title">
                                                    @if ($errors->has('title'))
                                                        <span class="error">
                                                            <strong>{{ $errors->first('title') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                <textarea rows="5" cols="5" class="form-control" value="description" name="description" placeholder="Description">This is a test message here</textarea>
                                                    @if ($errors->has('description'))
                                                        <span class="error">
                                                            <strong>{{ $errors->first('description') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="address" name="address" placeholder="Enter Address">
                                                    @if ($errors->has('address'))
                                                        <span class="error">
                                                            <strong>{{ $errors->first('address') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Mobile</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" value="9653338547" name="mobile" placeholder="Enter mobile number">
                                                    @if ($errors->has('mobile'))
                                                        <span class="error">
                                                            <strong>{{ $errors->first('mobile') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" value="sandeep@gmail.com" name="email" placeholder="Enter email">
                                                    @if ($errors->has('email'))
                                                        <span class="error">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Property Type</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="propertyType">
                                                    <option value="opt1">Select One Value Only</option>
                                                    <option value="opt2" selected>Type 2</option>
                                                </select>
                                                    @if ($errors->has('propertyType'))
                                                        <span class="error">
                                                            <strong>{{ $errors->first('propertyType') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Property Raiting</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="propertyRaiting">
                                                    <option value="opt1" >Select One Value Only</option>
                                                    <option value="opt2" selected>Type 2</option>
                                                </select>
                                                    @if ($errors->has('propertyRaiting'))
                                                        <span class="error">
                                                            <strong>{{ $errors->first('propertyRaiting') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Property Category</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="propertyCategory">
                                                    <option value="opt1">Select One Value Only</option>
                                                    <option value="opt2" selected>Type 2</option>
                                                </select>
                                                    @if ($errors->has('propertyCategory'))
                                                        <span class="error">
                                                            <strong>{{ $errors->first('propertyCategory') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Regular Price</label>
                                            <div class="col-sm-10">
                                                <input type="number" value="200" class="form-control" name="regular_price" placeholder="Price before Offer">
                                                    @if ($errors->has('regular_price'))
                                                        <span class="error">
                                                            <strong>{{ $errors->first('regular_price') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Offer Price</label>
                                            <div class="col-sm-10">
                                                <input type="number" value="160" class="form-control" name="offer_price" placeholder="Price after Offer">
                                                    @if ($errors->has('offer_price'))
                                                        <span class="error">
                                                            <strong>{{ $errors->first('offer_price') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Property Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="propertyImage">
                                                @if ($errors->has('propertyImage'))
                                                    <span class="error">
                                                        <strong>{{ $errors->first('propertyImage') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Other Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" multiple class="form-control" name="otherImages[]">
                                                @if ($errors->has('otherImages'))
                                                    <span class="error">
                                                        <strong>{{ $errors->first('otherImages') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Timming From</label>
                                            <div class="col-sm-10">
                                                <input type="time" class="form-control" name="timmingFrom">
                                                @if ($errors->has('timmingFrom'))
                                                    <span class="error">
                                                        <strong>{{ $errors->first('timmingFrom') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Timming To</label>
                                            <div class="col-sm-10">
                                                <input type="time" class="form-control" name="timmingTo">
                                                @if ($errors->has('timmingTo'))
                                                    <span class="error">
                                                        <strong>{{ $errors->first('timmingTo') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Availability</label>
                                            <div class="col-sm-1">
                                                <label class="switch">
                                                    <input type="checkbox" name="availability" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Available Rooms</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="4" name="availableRooms" placeholder="Enter Address">
                                                @if ($errors->has('availableRooms'))
                                                    <span class="error">
                                                        <strong>{{ $errors->first('availableRooms') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <input type="submit" class="btn btn-primary" value="Add Property">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection