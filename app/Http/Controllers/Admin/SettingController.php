<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Type;
use App\Models\Warehouse;
use DB;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index($idx)
    {
        $settings = DB::table('settings')
            ->leftjoin('types', 'settings.type_id', 'types.id')
            ->leftjoin('warehouses', 'settings.warehouse_id', 'warehouses.id')
            ->select('settings.*', 'types.name as type_name', 'warehouses.name_eng as warehouse_name')
            ->where('types.id', $idx)
            ->get();
        return view('admin.settings.manage_setting', compact('settings'));
    }

    public function add_setting($idx)
    {
        $types = Type::where('status', 1)->get();
        $warehouses = Warehouse::where('status', 1)->get();
        return view('admin.settings.add_setting', compact('types', 'warehouses'));
    }

    public function edit_setting($id)
    {
        $setting = Setting::find($id);
        return $setting;
        // exit();
        // return response()->json([
        //     'setting'=>$setting
        // ]);
    }

    public function update_setting(Request $request,$id)
    {
        $update = Setting::find($id);
        $update->name_eng = $request->name_eng;
        $update->name_local = $request->name_local;
        $update->note = $request->note;
        $update->save();
        return "success";
        // return redirect()->back();
    }

    public function save_setting(Request $request)
    {
        Setting::create($request->all());
        // return redirect()->back()->with('message', 'Setting Saved Successfully!!');
        // return redirect()->route('manage-setting')->with('message', 'Setting Saved Successfully!!');
    }
}
