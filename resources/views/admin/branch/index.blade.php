@extends('admin.layout.master')
@section('title','INVOICE PARAMETER')
@section ('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    {{-- <h4 class="page-title">Settings</h4> --}}
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-lg-1"></div> --}}
                <div class="col-lg-12">
                    <div class="card-box">
                        <div class="card-block">
                            <div class="container mt-3">
                                <h5 class="text-bold card-title">Branch</h5>
                                <br>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#branch">Branch</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" onclick="loadWarehouse(' ')" href="#warehouse">Warehouse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" onclick="loadStore()" href="#store">Store</a>
                                    </li>
                                </ul>
                                
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    {{-- Branch Tab --}}
                                    <div id="branch" class="container tab-pane active"><br>
                                        <button href="" data-toggle="modal" data-target="#b_modal" class="btn btn-default btn-icon-sm">
                                            Add New
                                        </button>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-box">
                                                    <div class="card-block">
                                                        <h5 class="text-bold card-title">Branches</h5>
                                                        <table id="tbl_branch" class="table table-striped table-bordered" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name (English)</th>
                                                                    <th>Name (Local)</th>
                                                                    <th>Address (English)</th>
                                                                    <th>Address (Local)</th>
                                                                    <th>Contact Info (Local)</th>
                                                                    <th>Email</th>
                                                                    <th>Logo</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="b_tbody">
                                                                @foreach ($data as $branch)
                                                                    <tr id="b_tr{{$branch->id}}">
                                                                        <td>{{$branch->name_eng}}</td>
                                                                        <td>{{$branch->name_local}}</td>
                                                                        <td>{{$branch->address_eng}}</td>
                                                                        <td>{{$branch->address_local}}</td>
                                                                        <td>{{$branch->contact_info}}</td>
                                                                        <td>{{$branch->email}}</td>
                                                                        <td> <img src="{{asset('storage/'.$branch->logo)}}" style="height: 50px; width: 50px;" alt=""> </td>
                                                                        <td>{{$branch->status}}</td>
                                                                        <td align="center">
                                                                            <div class="btn-group btn-group-sm" role="group" aria-label="...">                                                    
                                                                                <button onclick="getBranchById({{$branch->id}})" class="btn btn-hover-shine btn-primary btn-pill">Edit</button>                                            
                                                                                <button style="margin-left: 5px" type="submit" class="btn btn-pill btn-hover-shine btn-danger">Delete</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>                
                                        </div>
                                    </div>
                                    {{-- Warehouse Tab --}}
                                    <div id="warehouse" class="container tab-pane fade"><br>
                                        <button href="" data-toggle="modal" data-target="#w_modal" class="btn btn-default btn-icon-sm">
                                            Add New
                                        </button>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-box">
                                                    <div class="card-block">
                                                        {{-- <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" /> --}}
                                                        <h5 class="text-bold card-title">Warehouse</h5>
                                                        <table id="tbl_warehouse" class="table table-striped table-bordered" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name (English)</th>
                                                                    <th>Name (English)</th>
                                                                    <th>Branch Name</th>
                                                                    <th>Address (English)</th>
                                                                    <th>Address (Local)</th>
                                                                    <th>Contact Info (Local)</th>
                                                                    <th>Email</th>
                                                                    <th>Start Date</th>
                                                                    <th>End Date</th>
                                                                    <th>Vat Reg No.</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="w_tbody">
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>                
                                        </div>
                                    </div>
                                    {{-- Store Tab --}}
                                    <div id="store" class="container tab-pane fade"><br>
                                        <button href="" data-toggle="modal" data-target="#s_modal" class="btn btn-default btn-icon-sm">
                                            Add New
                                        </button>
                                        <hr>
                                        <div class="row">
                                            {{-- <div class="col-lg-2"></div> --}}
                                            <div class="col-lg-12">
                                                <div class="card-box">
                                                    <div class="card-block">
                                                        {{-- <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" /> --}}
                                                        <h5 class="text-bold card-title">Branches</h5>
                                                        <table id="tbl_store" class="table table-striped table-bordered" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name (English)</th>
                                                                    <th>Name (Local)</th>
                                                                    <th>Warehouse Name</th>
                                                                    <th>Address (English)</th>
                                                                    <th>Address (Local)</th>
                                                                    <th>Email</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="s_tbody">
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>                
                                        </div>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Warehouse Modal -->
<div class="modal fade bd-example-modal-lg" id="w_modal" tabindex="-1" role="dialog" aria-labelledby="w_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="w_modalLabel">Warehouse</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form  id="w_form" name="w_form" class="" novalidate="">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <label for="">Warehouse Name (English)</label>
                                    <input type="text" id="w_id" hidden>
                                    <input type="text" id="w_name_eng" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-md-5">
                                    <label for="">Warehouse Name (Local)</label> <br>
                                    <input type="text" id="w_name_local" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <label for="">Branch Name (Local)</label> <br>
                                    <select class="form-control" id="w_branch_id">
                                        <option value=' '>--Select Branch--</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Contact Info</label>
                                    <input type="text" id="w_contact_info" class="form-control" placeholder="01...">
                                </div>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <label for="">Start Date</label><br>
                                    <input type="date" class="form-control" id="w_start_date" name="start_date" placeholder="Start Date">

                                </div>
                                <div class="col-md-5">
                                    <label for="">End Date</label>
                                    <input type="date" class="form-control" id="w_end_date" name="end_date" placeholder="End Date">
                                </div>
                            </div>

                            <div class="row" style="padding-top: 20px">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <label for="">Address (English)</label>
                                    <input type="text" name="w_address_eng" id="w_address_eng" class="form-control" placeholder="Address in English">
                                </div>
                                <div class="col-md-5">
                                    <label for="">Address (Local)</label>
                                    <input type="text" name="w_address_local" id="w_address_local" class="form-control" placeholder="Address in Local">
                                </div>
                            </div>

                            <div class="row" style="padding-top: 20px">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <label for="">VAT Reg No.</label>
                                    <input type="text" name="w_vat_reg_no" id="w_vat_reg_no" class="form-control" placeholder="Address in Local">
                                </div>
                                <div class="col-md-5">
                                    <label for="">Email</label>
                                    <input type="text" name="w_email" id="w_email" class="form-control" placeholder="Address in English">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="w_save" value="save" onClick="warehouseSave('save')">Save</button>
          <button type="button" class="btn btn-primary" id="w_update" style="display: none" onClick="warehouseSave('update')">Update</button>
        </div>
      </div>
    </div>
</div>

<!-- Store Modal -->
<div class="modal fade bd-example-modal-lg" id="s_modal" tabindex="-1" role="dialog" aria-labelledby="s_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="s_modalLabel">Store</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form  id="s_form" name="s_form" novalidate="">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h5 class="text-bold card-title">Add Branch</h5> --}}
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <label for="">Store Name (English)</label>
                                    <input type="text" id="s_name_eng" class="form-control" placeholder="Name">
                                    <input type="text" id="s_id" hidden>
                                </div>
                                {{-- <div class="col-md-1"></div> --}}
                                <div class="col-md-5">
                                    <label for="">Store Name (Local)</label>
                                    <input type="text" id="s_name_local" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <label for="">Address (English)</label>
                                    <input type="text" id="s_address_eng" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-md-5">
                                    <label for="">Address (Local)</label>
                                    <input type="text" id="s_address_local" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <label for="">Warehouse</label> <br>
                                    <select class="form-control" id="s_warehouse_id">
                                        <option value=' '>--Select Warehouse--</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Email</label>
                                    <input type="email" id="s_email" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="s_save" value="save" onClick="storeSave('save')">Save</button>
          <button type="button" class="btn btn-primary" id="s_update" style="display: none" onClick="storeSave('update')">Update</button>
        </div>
      </div>
    </div>
</div>
<!-- Branch Modal -->
<div class="modal fade bd-example-modal-lg" id="b_modal" tabindex="-1" role="dialog" aria-labelledby="b_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="b_modalLabel">Branch</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form  id="b_form" method="post" name="b_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <label for="">Branch Name (English)</label>
                                        <input type="text" name="id" id="id" hidden>
                                        <input type="text" name="name_eng" id="name_eng" class="form-control" placeholder="Name" required data-parsley-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup" >
                                    </div>
                                    <div class="col-md-5">
                                        <label for="">Branch Name (Local)</label>
                                        <input type="text" name="name_local" id="name_local" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 20px">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <label for="">Address (English)</label>
                                        <input type="text" name="address_eng" id="address_eng" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="col-md-5">
                                        <label for="">Address (Local)</label>
                                        <input type="text" name="address_local" id="address_local" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 20px">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <label for="">Contact Info</label>
                                        <input type="text" name="contact_info" id="contact_info" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="col-md-5">
                                        <label for="">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 20px">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <label for="">Branch Logo</label>
                                        <input type="text" name="old_logo" hidden readonly id="old_logo">
                                        <input type="file" name="logo" id="logo" class="form-control" placeholder="Name">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input class="btn btn-primary" type="submit" id="b_save" value="save" value="Save">
                    <button type="submit" class="btn btn-primary" id="b_update" style="display: none">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    //Branch
    //Saves an update
    /*function bbranchSave(state) {
        // $('#b_form').parsley();
        console.log($('#b_logo').val());
        debugger
        var b_id = $('#b_id').val();
        var nameeng = $('#b_name_eng').val();
        var namelocal = $('#b_name_local').val();
        var addresseng = $('#b_address_eng').val();
        var addresslocal = $('#b_address_local').val();
        var contactinfo = $('#b_contact_info').val();
        var emails = $('#b_email').val();
        var l = $('#b_logo').val();

        if (nameeng == ' ' || namelocal == ' ') 
        {
            alert('Name is Required.');
        }
        else
        {
            $.ajax({
                url: '/branch',
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: b_id,
                    name_eng: nameeng,
                    name_local: namelocal,
                    address_eng: addresseng,
                    address_local: addresslocal,
                    contact_info: contactinfo,
                    email: emails,
                    logo: l,
                },
                beforeSend:function()
                {
                    $('#b_save').attr('disabled', 'disabled');
                    $('#b_save').val('Saving...');
                },
                success: function (data) {
                    console.log(data);
                    var new_row = '<tr id="b_tr' + data.id + '"> <td>' + data.name_eng + '</td><td>' + data.name_local +
                        '</td><td>' + data.address_eng + '</td><td>' + data.address_local + '</td><td>' + data.contact_info + 
                        '</td><td>' +  data.email + '</td><td>' + data.logo + '</td><td>' + data.status +'</td><td align="center"> <div class="btn-group btn-group-sm" role="group" aria-label="...">' +
                        '<button onclick="getBranchById('+ data.id +')" class="btn btn-hover-shine btn-primary btn-pill">Edit</button> <button style="margin-left: 5px" type="submit" class="btn btn-pill btn-hover-shine btn-danger">Delete</button> </div> </td>';

                    if (state == "save") 
                        $('#b_tbody').append(new_row);
                    else
                        $("#b_tr" + data.id).replaceWith(new_row);


                    $('#b_form').trigger("reset");
                    $('#b_modal').modal('hide');
                    $('#b_save').attr('disabled', false);
                    $('#b_save').val('Save');
                },
                error: function (data) {
                    alert(data.error);
                    console.log(data);
                    $('#b_save').attr('disabled', false);
                    $('#b_save').val('Save');
                }
            });
        }
    }*/
    //Get Branch By Id
    function getBranchById(id) {
        $.ajax({
            url: '/branch/'+id+'/edit',
            type: 'get',
            data: {
                _token: "{{ csrf_token() }}",
            },
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id);
                $('#name_eng').val( data.name_eng);
                $('#name_local').val(data.name_local);
                $('#address_eng').val(data.address_eng);
                $('#address_local').val(data.address_local);
                $('#contact_info').val(data.contact_info);
                $('#email').val(data.email);
                $('#old_logo').val(data.logo);
            },
            error: function (data) {
                console.log(data);
            }
        });

        $('#b_modal').modal('show');
        $('#b_save').hide();
        $('#b_update').show();
    }
    //Load Branch DropDown
    function loadBranch() {
        var str = " ";
        $.ajax({
            url: '/get-branch',
            type: 'get',
            data: {
                _token: "{{ csrf_token() }}",
            },
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $.each(data, function (index, row) {
                    str+="<option value='" + row.id + "'>" + row.name_eng + "</option>";
                });
                $('#w_branch_id').append(str);
            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    //Warehouse
    //Saves an update
    function warehouseSave(state) {
        debugger
        var w_id = $('#w_id').val();
        var nameeng = $('#w_name_eng').val();
        var namelocal = $('#w_name_local').val();
        var addresseng = $('#w_address_eng').val();
        var addresslocal = $('#w_address_local').val();
        var contactinfo = $('#w_contact_info').val();
        var emails = $('#w_email').val();
        var vat_reg = $('#w_vat_reg_no').val();
        var branchid = $('#w_branch_id').val();
        var startdate = $('#w_start_date').val();
        var enddate = $('#w_end_date').val();

        if (nameeng == ' ' || namelocal == ' ') 
        {
            alert('Name is Required.');
        }
        else
        {
            $.ajax({
                url: '/warehouse',
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: w_id,
                    name_eng: nameeng,
                    name_local: namelocal,
                    address_eng: addresseng,
                    address_local: addresslocal,
                    contact_info: contactinfo,
                    email: emails,
                    branch_id: branchid,
                    start_date: startdate,
                    end_date: enddate,
                    vat_reg_no: vat_reg, 

                },
                success: function (data) {
                    console.log(data);
                    var new_row = '<tr id="w_tr' + data.id + '"> <td>' + data.name_eng + '</td><td>'+ (data['branch'].name_eng) +'</td><td>' + data.name_local +
                            '</td><td>' + data.address_eng + '</td><td>' + data.address_local + '</td><td>' + data.contact_info + 
                            '</td><td>' +  data.email + '</td><td>' + data.start_date + '</td><td>'+data.end_date+'</td><td>'+ data.vat_reg_no+'</td><td>' + data.status +'</td><td align="center"> <div class="btn-group btn-group-sm" role="group" aria-label="...">' +
                            '<button onclick="getWarehouseById('+ data.id +')" class="btn btn-hover-shine btn-primary btn-pill" >Edit</button> <button style="margin-left: 5px" type="submit" class="btn btn-pill btn-hover-shine btn-danger">Delete</button> </div> </td>';
                   
                    if (state == "save") 
                        $('#w_tbody').append(new_row);
                    else
                        $("#w_tr" + data.id).replaceWith(new_row);


                    $('#w_form').trigger("reset");
                    $('#w_modal').modal('hide');
                },
                error: function (data) {
                    alert(data);
                    console.log(data);
                }
            });
        }
    }

    //Get Warehouse By Id
    function getWarehouseById(id) {
        $.ajax({
            url: '/warehouse/'+id+'/edit',
            type: 'get',
            data: {
                _token: "{{ csrf_token() }}",
            },
            dataType: 'json',
            success: function (data) {
                $('#w_id').val(data.id);
                $('#w_name_eng').val(data.name_eng);
                $('#w_name_local').val(data.name_local);
                $('#w_address_eng').val(data.address_eng);
                $('#w_address_local').val(data.address_local);
                $('#w_contact_info').val(data.contact_info);
                $('#w_email').val(data.email);
                $('#w_vat_reg_no').val(data.vat_reg_no);
                $('#w_branch_id').val(data.branch_id);
                $('#w_start_date').val(data.start_date);
                $('#w_end_date').val(data.end_date);
            },
            error: function (data) {
                console.log(data);
            }
        });

        $('#w_modal').modal('show');
        $('#w_save').hide();
        $('#w_update').show();
    }

    //Load Warehouse DropDown & Table
    function loadWarehouse(btn_val) {
        debugger
        var str = " ";
        $.ajax({
            url: 'warehouse',
            type: 'get',
            data: {
                _token: "{{ csrf_token() }}",
            },
            dataType: 'json',
            success: function (data) {
                console.log(data);
                // alert(data);
                if(btn_val == 'dd')
                {
                    $.each(data, function (index, row) {
                        str+="<option value='" + row.id + "'>" + row.name_eng + "</option>";
                    });
                    $('#s_warehouse_id').append(str);
                }
                else
                {
                    $.each(data, function (index, data) {
                        // alert(data.email);
                        str += '<tr id="w_tr' + data.id + '"> <td>' + data.name_eng + '</td><td>'+ data.name_local +'</td><td>' + data['branch'].name_eng  +
                            '</td><td>' + data.address_eng + '</td><td>' + data.address_local + '</td><td>' + data.contact_info + 
                            '</td><td>' +  data.email + '</td><td>' + data.start_date + '</td><td>'+data.end_date+'</td><td>'+ data.vat_reg_no+'</td><td>' + data.status +'</td><td align="center"> <div class="btn-group btn-group-sm" role="group" aria-label="...">' +
                            '<button onclick="getWarehouseById('+ data.id +')" class="btn btn-hover-shine btn-primary btn-pill">Edit</button> <button style="margin-left: 5px" type="submit" class="btn btn-pill btn-hover-shine btn-danger">Delete</button> </div> </td>';
                     });
                    $('#w_tbody').empty();
                    $('#w_tbody').append(str);
                    loadBranch();
                }
            },
            error: function (data) {
                alert(data);
                console.log(data);
            }
        });
    }

   
    //Store
    //Saves an update
    function storeSave(state) {
        debugger
        var s_id = $('#s_id').val();
        var nameeng = $('#s_name_eng').val();
        var namelocal = $('#s_name_local').val();
        var addresseng = $('#s_address_eng').val();
        var addresslocal = $('#s_address_local').val();
        var warehousid = $('#s_warehouse_id').val();
        var emails = $('#s_email').val();

        if (nameeng == ' ' || namelocal == ' ') 
        {
            alert('Name is Required.');
        }
        else
        {
            $.ajax({
                url: '/store',
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: s_id,
                    name_eng: nameeng,
                    name_local: namelocal,
                    address_eng: addresseng,
                    address_local: addresslocal,
                    warehouse_id: warehousid,
                    email: emails,
                },
                success: function (data) {
                    console.log(data);
                    var new_row = '<tr id="s_tr' + data.id + '"> <td>' + data.name_eng + '</td><td>' + data.name_local +
                        '</td><td>'+ data['warehouse'].name_eng +'</td><td>' + data.address_eng + '</td><td>' + data.address_local + '</td><td>' +  data.email + '</td><td>' + data.status +'</td><td align="center"> <div class="btn-group btn-group-sm" role="group" aria-label="...">' +
                        '<button onclick="getStoreById('+ data.id +')" class="btn btn-hover-shine btn-primary btn-pill">Edit</button> <button style="margin-left: 5px" type="submit" class="btn btn-pill btn-hover-shine btn-danger">Delete</button> </div> </td>';

                    if (state == "save") 
                        $('#s_tbody').append(new_row);
                    else
                        $("#s_tr" + data.id).replaceWith(new_row);


                    $('#s_form').trigger("reset");
                    $('#s_modal').modal('hide');
                },
                error: function (data) {
                    alert(data);
                    console.log(data);
                }
            });
        }
    }
    //Load Store Table
    function loadStore() {
        // debugger
        var str = " ";
        $.ajax({
            url: 'store',
            type: 'get',
            data: {
                _token: "{{ csrf_token() }}",
            },
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $.each(data, function (index, data) {
                    // alert(data.email);
                    str += '<tr id="s_tr' + data.id + '"> <td>' + data.name_eng + '</td><td>'+ data.name_local +'</td><td>' + data['warehouse'].name_eng +
                        '</td><td>' + data.address_eng + '</td><td>' + data.address_local + '</td><td>' +  data.email + '</td><td>' + data.status +'</td><td align="center"> <div class="btn-group btn-group-sm" role="group" aria-label="...">' +
                        '<button onclick="getStoreById('+ data.id +')" class="btn btn-hover-shine btn-primary btn-pill">Edit</button> <button style="margin-left: 5px" type="submit" class="btn btn-pill btn-hover-shine btn-danger">Delete</button> </div> </td>';
                });
                $('#s_tbody').empty();
                $('#s_tbody').append(str);
                loadWarehouse('dd');
            },
            error: function (data) {
                alert(data);
                console.log(data);
            }
        });
    }

    //Get Store By Id
    function getStoreById(id) {
        $.ajax({
            url: '/store/'+id+'/edit',
            type: 'get',
            data: {
                _token: "{{ csrf_token() }}",
            },
            dataType: 'json',
            success: function (data) {
                $('#s_id').val(data.id);
                $('#s_name_eng').val(data.name_eng);
                $('#s_name_local').val(data.name_local);
                $('#s_address_eng').val(data.address_eng);
                $('#s_address_local').val(data.address_local);
                $('#s_warehouse_id').val(data.warehouse_id);
                $('#s_email').val(data.email);
            },
            error: function (data) {
                console.log(data);
            }
        });

        $('#s_modal').modal('show');
        $('#s_save').hide();
        $('#s_update').show();
    }

    $(document).ready(function() {

        $('#b_form').on('submit', function(event){
            event.preventDefault();
            var d = $('#b_form').serializeArray();
            console.log(d[1].value);
            // console.log(new FormData($('#b_form')[0]));
            debugger
            $.ajax({
                url: '/branch',
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend:function()
                {
                    $('#b_save').attr('disabled', 'disabled');
                    $('#b_save').val('Saving...');
                },
                success: function (data) {
                    console.log(data);
                    var new_row = '<tr id="b_tr' + data.id + '"> <td>' + data.name_eng + '</td><td>' + data.name_local +
                        '</td><td>' + data.address_eng + '</td><td>' + data.address_local + '</td><td>' + data.contact_info + 
                        '</td><td>' +  data.email + '</td><td> <img src="/storage/'+ data.logo + '" style="height: 50px; width: 50px;" alt=""> </td><td>' + data.status +'</td><td align="center"> <div class="btn-group btn-group-sm" role="group" aria-label="...">' +
                        '<button onclick="getBranchById('+ data.id +')" class="btn btn-hover-shine btn-primary btn-pill">Edit</button> <button style="margin-left: 5px" type="submit" class="btn btn-pill btn-hover-shine btn-danger">Delete</button> </div> </td>';
                       
                    if (d[1].value > 0 ) 
                        $("#b_tr" + data.id).replaceWith(new_row);
                    else
                        $('#b_tbody').append(new_row);


                    $('#b_form').trigger("reset");
                    $('#b_modal').modal('hide');
                    $('#b_save').attr('disabled', false);
                    $('#b_save').val('Save');
                },
                error: function (data) {
                    alert(data);
                    console.log(data);
                    $('#b_save').attr('disabled', false);
                    $('#b_save').val('Save');
                }
            });
        });
        $('#w_branch_id').select2();
        $('#s_warehouse_id').select2();
        $('#tbl_branch').DataTable();
        // $('#b_form').parsley();
        // $('#tbl_warehouse').DataTable();
        // $('#tbl_store').DataTable();
    });
</script>
@endsection