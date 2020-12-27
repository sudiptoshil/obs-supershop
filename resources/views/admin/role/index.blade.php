@extends('admin.layout.master')
@section('title','ROLE MANAGEMENT')
@section ('content')
<div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <h4 class="page-title">ROLES</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h4 class="card-title">ALL ROLES</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NAME</th>
                                                <th>PERMISSION</th>
                                                <th>CREATED BY</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($roles as $key=>$role)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$role->name}}</td>
                                                <td>
                                                @forelse($role->permissions->groupBy('group_name') as $key=>$per_group)
                                                {{$key}} ,
                                                @empty
                                                {{'Yet Not Assigned'}}
                                                @endforelse
                                                </td>
                                                <td>{{$role->created_by}}</td>
                                                <td><button>add new</button></td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4">There is no data recorded</td>
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