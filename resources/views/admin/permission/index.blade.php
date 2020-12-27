@extends('admin.layout.master')
@section('title','PERMISSION MANAGEMENT')
@section ('content')
<div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <h4 class="page-title">PERMISSIONs</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h4 class="card-title">ALL PERMISSIONs</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NAME</th>
                                                <th>ROUTE</th>
                                                <th>GROUP</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($permissions as $key=>$permission)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$permission->name}}</td>
                                                <td>{{$permission->route_name}}</td>
                                                <td>{{$permission->group_name}}</td>
                                                <td><button>add Button</button></td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5">There is no data recorded</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
