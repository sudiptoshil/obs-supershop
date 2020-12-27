@extends('admin.layout.master')
@section('title','INVOICE PARAMETER')
@section ('content')
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <h4 class="page-title">Settings</h4>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-lg-1"></div> --}}
                    <div class="col-lg-8">
                        <div class="card-box">
                            <div class="card-block">
                                {{-- <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" /> --}}
                                <h5 class="text-bold card-title">Branches</h5>
                                <table id="tbl_branch" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name (English)</th>
                                            <th>Name (Local)</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td align="center">
                                                <form action="" method="POST">
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                                    <!-- <a class="btn btn-hover-shine btn-pill btn-info" href="">Show</a> -->
                
                                                    <a class="btn btn-hover-shine btn-primary btn-pill" href="">Edit</a>
                                
                                                    @csrf
                                                    @method('DELETE')
                                    
                                                    <button style="margin-left: 5px" type="submit" class="btn btn-pill btn-hover-shine btn-danger">Delete</button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-1"></div> --}}
                    
                </div>
                <div class="row">
                    <div class="col-lg-12" style="padding-left: 50px">
                        <div class="card-box">
                            <div class="card-block">
                                {{-- <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" /> --}}
                                <h5 class="text-bold card-title">Warehouse</h5>
                                <table id="tbl_warehouse" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name (English)</th>
                                            <th>Name (Local)</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            <th>Name (English)</th>
                                            <th>Name (Local)</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<script>
   $(document).ready(function() {
    $('#tbl_warehouse').DataTable();
    $('#tbl_branch').DataTable();
} );
</script>

@endsection




