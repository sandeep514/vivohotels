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
                                    <div class="card-block">
                                        <h4 class="sub-title">Add Amenities</h4>

                                        <form method="POST" action="{{ route('admin.submit.amenities') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">New Amenities</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="" name="amenities[]" class="form-control" placeholder="Amenities">
                                                </div>
                                                <div class="col-sm-1"><a href="javascript:void(0)" class="btn btn-primary addnew"> + </a></div>
                                            </div>
                                            
                                            
                                            <div class="appendData">
                                                @if( @$amenities )
                                                    @foreach( $amenities as $k => $v )
                                                        <div class="form-group row removeablediv">
                                                            <label class="col-sm-2 col-form-label">New Amenities</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="amenities[]" value="{{ $v->name }}" class="form-control" placeholder="Amenities">
                                                            </div>
                                                            <div class="col-sm-1"><a href="javascript:void(0)" class="btn btn-danger removeRow"> - </a></div>
                                                        </div>
                                                    @endforeach
                                                @endif    
                                            </div>
                                            <input type="submit" class="btn btn-primary" value="Save">
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

@section('javascript')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.addnew').click(function(e){
                $('.appendData').append('<div class="form-group row removeablediv"><label class="col-sm-2 col-form-label">New Amenities</label><div class="col-sm-9"><input type="text" name="amenities[]" class="form-control" placeholder="Amenities"></div><div class="col-sm-1"><a href="javascript:void(0)" class="btn btn-danger removeRow"> - </a></div></div>');
            });
            $(document).on('click', '.removeRow' , function(){
                $(this).parents('.removeablediv').remove();
            });
        });
    </script>
@endsection