<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    public function index()
    {
        $types = DB::table('types')
            ->leftjoin('modules', 'types.module_id', 'modules.id')
            ->select('types.*', 'modules.name as module_name')
            ->get();
        return view('admin.type.manage_type', compact('types'));
    }

    public function add_type()
    {
        $modules = Module::all();
        return view('admin.type.add_type', compact('modules'));
    }

    public function save_type(Request $request)
    {
        Type::create($request->all());
        return redirect()->route('manage-type')->with('message', 'Type Saved Successfully!!');
    }

    public function edit_type()
    {

    }

    public function update_type()
    {

    }
}
