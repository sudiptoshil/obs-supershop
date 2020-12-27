@extends('admin.layout.master')
@section('title', 'Manage Types')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('add-type') }}" class="btn btn-primary" type="button" style="margin-top:10%">Add Type</a>
                <h5 style="color:green">{{ Session::get('message') }}</h5>
                <table class="table" style="margin-top:5%">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Module Name</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                            @foreach ($types as $type)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $type->name }}</td>
                                    @if (!empty($type->module_name))
                                        <td>{{ $type->module_name }}</td>
                                    @else
                                        <td style="color:red">Not Found</td>
                                    @endif
                                    @if ($type->status == 1)
                                        <td>Active</td>
                                    @else
                                        <td>Inactive</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
