@extends('admin.layout.master')
@section('title', 'Add Setting')
@section('content')
    <div class="container">
        <div class="row">
            <h5>Add Setting</h5>
            <h5>{{ Session::get('message') }}</h5>
            <div class="col-md-12">
                <form action="{{ route('save-setting') }}" style="margin-top:5%" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name Eng</label>
                        <input type="text" name="name_eng" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Eng Name">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name Local</label>
                        <input type="text" name="name_local" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Local Name">
                        <input type="hidden" name="type_id" value="{{ request()->route('idx') }}" class="form-control">

                    </div>
                    {{-- <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Types</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="type_id">
                            <option selected value="0">Choose...</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}

                    {{-- <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Ware House</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="warehouse_id">
                            <option selected value="0">Choose...</option>
                            @foreach ($warehouses as $warehouse)
                                <option value="{{ $warehouse->id }}">{{ $warehouse->name_eng }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Status</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="status">
                            <option selected>Choose...</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
