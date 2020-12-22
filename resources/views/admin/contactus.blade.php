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
                                    <h5>Contact Us</h5>
                                    <span>Here you can find all the Contact Queries.</span>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive dt-responsive">
                                        <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>Message</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($contacts as $k => $v)
                                                    <tr>
                                                        <td>{{ $v->name }}</td>
                                                        <td>{{ $v->email }}</td>
                                                        <td>{{ $v->mobile }}</td>
                                                        <td>{{ $v->message }}</td>
                                                        <td><a href="javascript::void(0)"><span class="fa fa-eye"></span></a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>Message</th>
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