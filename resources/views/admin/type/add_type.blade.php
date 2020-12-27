@extends('admin.layout.master')
@section('title', 'Add Types')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('save-type') }}" style="margin-top:5%" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter Name">

                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Module</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="module_id">
                            <option selected  value="0">Choose...</option>
                            @foreach($modules as $module)
                            <option value="{{$module->id}}">{{$module->name}}</option>
                            @endforeach
                        </select>
                    </div>
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
