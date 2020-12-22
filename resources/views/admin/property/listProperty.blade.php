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
                                <div class="card-header">
                                    <h5>List Property</h5>
                                    <span>Here you can find all Properties added</span>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive dt-responsive">
                                        <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Address</th>
                                                    <th>Mobile</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($property as $k => $v)
                                                    <tr>
                                                        <td> <img style="width: 100px" src="{{ asset('property/'.$v->id.'/'.$v->propertyImage) }}" > </td>
                                                        <td>{{ $v->title }}</td>
                                                        <td title="{{ $v->description }}" style=" white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;">{{ $v->description }}</td>
                                                        <td title="{{ $v->address }}" style=" white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;">{{ $v->address }}</td>
                                                        <td>{{ $v->mobile }}</td>
                                                        <td>{{ $v->email }}</td>
                                                        <td>
                                                            @if( $v->status == 0 )
                                                                <a class="btn btn-sm btn-primary" href="{{ route('admin.property.change.status' , $v->id) }}">Activate</a>
                                                            @endif
                                                            
                                                            @if( $v->status == 1 )
                                                                <a class="btn btn-sm btn-danger" href="{{ route('admin.property.change.status' , $v->id) }}">De-activate</a>
                                                            @endif
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Address</th>
                                                    <th>Mobile</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
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