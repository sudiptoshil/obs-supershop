@extends('admin.layout.master')
@section('title', 'Manage Setting')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12" style='margin-top:10%'>
                {{-- <a href="{{ route('add-setting', ['idx' => request()->route('idx')]) }}" class="btn btn-primary"
                    type="button" style="margin-top:10%">Add
                    Setting</a> --}}
                     <button type="button"  class="btn btn-primary" data-toggle="modal"
                                            data-target="#addSetting">
                                           Add Setting
                                        </button>
                <h5 style="color:green">{{ Session::get('message') }}</h5>
                <table class="table" style="margin-top:5%">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Type EngLish</th>
                            <th scope="col">Type Local</th>
                            <th scope="col">Warehouse</th>
                            <th scope="col">Note</th>
                            {{-- <th scope="col">Status</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                            @foreach ($settings as $setting)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $setting->name_eng }}</td>
                                    <td>{{ $setting->name_local }}</td>
                                     @if (!empty($setting->warehouse_name))
                                        <td>{{ $setting->warehouse_name }}</td>
                                    @else
                                        <td style="color:red">Not Found</td>
                                    @endif
                                    <td>{{ $setting->note }}</td>
                                    {{-- @if ($setting->status == 1)
                                        <td>Active</td>
                                    @else
                                        <td>Inactive</td>
                                    @endif  --}}
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" onClick='editSetting({{$setting->id}})' class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">
                                           Edit
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('admin.modal.edit_setting')
        @include('admin.modal.add_setting')
    @endsection
