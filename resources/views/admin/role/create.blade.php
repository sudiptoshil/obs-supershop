@extends('admin.layout.master')
@section('title','ROLE MANAGEMENT')
@section ('content')
<div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <h4 class="page-title">ROLES CREATE</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h4 class="card-title">ROLES CREATE</h4>
                                <div class="table-responsive">
                                    <table id="protable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Permissions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($permission_groups as $key=>$permissions)
                                                <tr>
                                                    <th><h5>{{$key}}</h5></th>
                                                    <th>
                                                        <input id="{{strtolower($key)}}-select-all" onclick="checkAll('{{strtolower($key)}}')" type="checkbox">
                                                        <label for="{{strtolower($key)}}-select-all">{{$key}}</label>
                                                    </th>
                                                    
                                                        @forelse($permissions as $permission)
                                                        <th>
                                                            <div class="checkbox">
                                                                <input  type="checkbox" class="{{strtolower($key)}}-select" name="asignpermission[]" value="{{$permission->id}}">
                                                                <label for="demo-form-checkbox">{{$permission->name}}</label>
                                                            </div>
                                                        </th>
                                                        @empty
                                                        @endforelse
                                                    
                                                </tr>                                           
                                            @empty
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
@section('script')
    <!-- page script -->
    <script type="text/javascript">
    function checkAll(lebel_group){
        var consd=$("."+lebel_group+"-select").attr('checked');
        if(consd){
             $("."+lebel_group+"-select").attr('checked', false);
             }else{
                $("."+lebel_group+"-select").attr('checked', true);
             }
               
        }
        

    </script>
@stop
