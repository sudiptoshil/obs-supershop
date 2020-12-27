<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvoiceParameter;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceParameterController extends Controller
{
    public function index()
    {
        $data = InvoiceParameter::all();
        // dd($data);
        // $data = DB::table('invoice_parameters')->join('invoice_types','invoice_parameters.invoice_type_id', 'invoice_types.id')
        //         ->select('invoice_parameters.*', 'invoice_types.name')->get();
        return view('admin.invoice_parameter.index')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        if($request->back_date_allow_type != "")
        {
            $update = InvoiceParameter::find($id)->update($request->all());
            return response()->json($update, 200);
        }
        else
        {
            $data = [];
            $data [$request->col] = $request->val;
            // $data['updated_by'] = 1; //Auth()->id();
            $update = InvoiceParameter::find($id)->update($data);
            return response()->json($update, 200);
        }
    }
}
