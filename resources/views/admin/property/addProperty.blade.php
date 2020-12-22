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
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" value="123456" name="password" placeholder="Enter password">
                                                    @if ($errors->has('password'))
                                                        <span class="error">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Confirm Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" value="123456" name="confpassword" placeholder="Confirm Password">
                                                    @if ($errors->has('confpassword'))
                                                        <span class="error">
                                                            <strong>{{ $errors->first('confpassword') }}</strong>
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