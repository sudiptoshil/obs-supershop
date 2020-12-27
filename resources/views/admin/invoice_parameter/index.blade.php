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
                    <div class="col-lg-12">
                        <div class="card-box">
                            <div class="card-block">
                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                <h5 class="text-bold card-title">Invoice Parameters</h5>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Invoice Type</th>
                                            <th>Invoice Prefix</th>
                                            <th>Start Range</th>
                                            <th>Invoice Generate</th>
                                            <th>Attachment</th>
                                            <th>Back Date</th>
                                            <th>Ref No.</th>
                                            <th>Payment</th>
                                            <th>Show Product by</th>
                                            <th>Vendor Invoice</th>
                                            <th>Invoice Desc</th>
                                            <th>Invoice Reason (in update)</th>
                                            <th>Print View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i =1; $j = 1;
                                        @endphp
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{$item->name}}</td>
                                                <td>
                                                    <input type="text" class="form-control form-control-sm" value="{{$item->invoice_prefix}}" onchange="update({{$item->id}}, 'invoice_prefix', this.value)" name="invoice_prefix" style="width: 80px">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control form-control-sm" value="{{$item->range}}" onchange="update({{$item->id}}, 'range', this.value, 'range_{{$j}}')" id="range_{{$j}}" name="range" style="width: 80px">
                                                </td>
                                                {{-- Invoce Generate --}}
                                                <td>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" {{($item->invoice_gen_type=='manual')?'checked':''}} onclick="update({{$item->id}}, 'invoice_gen_type', this.value)" name="invoice_gen_{{$j}}" id="invoice_gen__{{$i}}" value="manual">
                                                                    <label class="form-check-label" for="invoice_gen__{{$i++}}">
                                                                        Manual
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'invoice_gen_type', this.value)" {{ ($item->invoice_gen_type=='auto')?'checked':'' }} name="invoice_gen_{{$j}}" id="invoice_gen_{{$i}}" value="auto">
                                                                    <label class="form-check-label" for="invoice_gen_{{$i++}}">
                                                                        Auto
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- Attachment --}}
                                                <td>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" onclick="update({{$item->id}}, 'attachment_type', this.value)" type="radio" {{ $item->attachment_type ?'checked':''}} name="attachment_{{$j}}" id="attachment__{{$i}}" value="required|" >
                                                                    <label class="form-check-label"for="attachment__{{$i++}}">
                                                                        Required
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'attachment_type', this.value)"  {{ ($item->attachment_type=='')?'checked':'' }} name="attachment_{{$j++}}" id="attachment_{{$i}}" value=" ">
                                                                    <label class="form-check-label" for="attachment_{{$i++}}">
                                                                        Not Required
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- Back Date --}}
                                                {{-- <td>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'back_date_allow_type', this.value)" {{ ($item->back_date_allow_type=='yes')?'checked':'' }} name="back_date_{{$j}}" id="back_date__{{$i}}" value="yes">
                                                                    <label class="form-check-label" for="back_date__{{$i++}}">
                                                                        Allow
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'back_date_allow_type', this.value)" {{ ($item->back_date_allow_type=='no')?'checked':'' }} name="back_date_{{$j++}}" id="back_date_{{$i}}" value="no">
                                                                    <label class="form-check-label" for="back_date_{{$i++}}">
                                                                        Not Allow
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td> --}}
                                                <td>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="dateAllow('days_{{$j}}')" {{ ($item->back_date_allow_type=='yes')?'checked':'' }} name="back_date_{{$j}}" id="back_date__{{$i}}" value="yes">
                                                                    <label class="form-check-label" for="back_date__{{$i++}}">
                                                                        Allow
                                                                    </label>
                                                                </div>
                                                                <input type="text" class="form-control form-control-sm" placeholder="Dasys" id="days_{{$j}}" value="{{$item->days}}" onchange="updateDate({{$item->id}}, this.value, 'yes', 'days_{{$j}}')" name="days" style="width: 80px; display: {{ ($item->back_date_allow_type=='yes')?'block':'none' }}">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="updateDate({{$item->id}}, 0, this.value, 'days_{{$j}}')" {{ ($item->back_date_allow_type=='no')?'checked':'' }} name="back_date_{{$j++}}" id="back_date_{{$i}}" value="no">
                                                                    <label class="form-check-label" for="back_date_{{$i++}}">
                                                                        Not Allow
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- Ref No. --}}
                                                <td>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'ref_no_type', this.value)" {{ $item->ref_no_type ?'checked':'' }} name="ref_no_{{$j}}" id="ref_no__{{$i}}" value="required|">
                                                                    <label class="form-check-label" for="ref_no__{{$i++}}">
                                                                        Required
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'ref_no_type', this.value)" {{ ($item->ref_no_type=='')?'checked':'' }} name="ref_no_{{$j++}}" id="ref_no_{{$i}}" value="">
                                                                    <label class="form-check-label" for="ref_no_{{$i++}}">
                                                                        Not Required
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- Payment Type --}}
                                                <td>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'payment_type', this.value)" {{ ($item->payment_type=='credit') ?'checked':'' }} name="payment_{{$j}}" id="payment__{{$i}}" value="credit">
                                                                    <label class="form-check-label" for="payment__{{$i++}}">
                                                                        Credit
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'payment_type', this.value)" {{ ($item->payment_type =='cash')?'checked':'' }} name="payment_{{$j++}}" id="payment_{{$i}}" value="cash">
                                                                    <label class="form-check-label" for="payment_{{$i++}}">
                                                                        Cash
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- Product Show Type --}}
                                                <td>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'product_show_type', this.value)" {{ ($item->product_show_type=='vendor')?'checked':'' }} name="product_show_{{$j}}" id="product_show__{{$i}}" value="vendor">
                                                                    <label class="form-check-label" for="product_show__{{$i++}}">
                                                                        Vendorwise
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'product_show_type', this.value)" {{ ($item->product_show_type=='all')?'checked':'' }} name="product_show_{{$j++}}" id="product_show_{{$i}}" value="all">
                                                                    <label class="form-check-label" for="product_show_{{$i++}}">
                                                                        All
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- vendor invoice Type --}}
                                                <td>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'vendor_invoice_type', this.value)" {{ $item->vendor_invoice_type ?'checked':'' }} name="invoice_gen_{{$j}}" id="vendor_invoice___{{$i}}" value="required|">
                                                                    <label class="form-check-label" for="vendor_invoice___{{$i++}}">
                                                                        Required
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'vendor_invoice_type', this.value)" {{ ($item->vendor_invoice_type=='')?'checked':'' }} name="vendor_invoice__{{$j++}}" id="vendor_invoice__{{$i}}" value="">
                                                                    <label class="form-check-label" for="vendor_invoice__{{$i++}}">
                                                                        Not Required
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- vendor des Type --}}
                                                <td>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'invoice_des_type', this.value)" {{ $item->invoice_des_type ?'checked':'' }} name="invoice_gen_{{$j}}" id="invoice_gen__{{$i}}" value="required|">
                                                                    <label class="form-check-label" for="invoice_gen__{{$i++}}">
                                                                        Required
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'invoice_des_type', this.value)" {{ ($item->invoice_des_type=='')?'checked':'' }} name="invoice_gen_{{$j++}}" id="invoice_gen_{{$i}}" value="">
                                                                    <label class="form-check-label" for="invoice_gen_{{$i++}}">
                                                                        Not Required
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- Invoice Reason Type --}}
                                                <td>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'invoice_reason_type', this.value)" {{ $item->invoice_reason_type ?'checked':'' }} name="invoice_res_{{$j}}" id="invoice_res__{{$i}}" value="required|">
                                                                    <label class="form-check-label" for="invoice_res__{{$i++}}">
                                                                        Required
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'invoice_reason_type', this.value)" {{ ($item->invoice_reason_type=='')?'checked':'' }} name="invoice_res_{{$j++}}" id="invoice_res_{{$i}}" value="">
                                                                    <label class="form-check-label" for="invoice_res_{{$i++}}">
                                                                        Not Required
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- Print View--}}
                                                <td>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'print_view', this.value)" {{ ($item->print_view == 'full') ?'checked':'' }} name="print_view_{{$j}}" id="print_view__{{$i}}" value="full">
                                                                    <label class="form-check-label" for="invoice_res__{{$i++}}">
                                                                        Full
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" onclick="update({{$item->id}}, 'print_view', this.value)" {{ ($item->print_view=='pos')?'checked':'' }} name="print_view_{{$j++}}" id="print_view_{{$i}}" value="pos">
                                                                    <label class="form-check-label" for="invoice_res_{{$i++}}">
                                                                        POS
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
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
        </div>


<script>
   
    function update(row_id, col_name, data_val,txtbox_id) {
        // alert(row_id + ' '+ col_name + ' ' + data_val);
        if (col_name == 'range' && Number.isInteger(parseInt(data_val))!= true) 
        {
            $('#'+txtbox_id).val('');  
            alert('Start Range Must be a number.')
        }
        else
        {
            var csrf = $('#csrf-token').val();
            $.ajax({
                url: '/invoice-parameter/'+row_id,
                type: 'post',
                data: {
                    _token: csrf,
                    col: col_name,
                    val: data_val,
                    // id: row_id,
                },
                success: function(response){
                    alert(response);
                }
            });
        }
        // location.reload();
    }

    function dateAllow(id) {
        $('#'+id).show();//css("display", "block");
    }

    function updateDate(row_id, day, date_allow, txtbox_id) {
        // alert(row_id + ' '+ col_name + ' ' + data_val);
        if (date_allow == 'yes' && Number.isInteger(parseInt(day))!= true) 
        {
            $('#'+txtbox_id).val('');  
            alert('Days Must be a number.')
        }
        else
        {
            var csrf = $('#csrf-token').val();
            $.ajax({
                url: '/invoice-parameter/'+row_id,
                type: 'post',
                data: {
                    _token: csrf,
                    days: day,
                    back_date_allow_type: date_allow,
                },
                success: function(response){
                    alert(response);
                }
            });
        }
        if (date_allow == 'no') 
        {
            $('#'+txtbox_id).val('');  
            $('#'+txtbox_id).hide();    
        }
    }
</script>

@endsection