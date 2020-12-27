<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BranchController extends Controller
{
    public function index()
    {
        $data = Branch::orderBy('id')->get();
        return view('admin.branch.index')->with('data', $data);
    }

    public function getAllBranch()
    {
        $data = Branch::all();
        return response()->json($data);
    }
    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->except('id');
        if($request->id == null)
        {
            if($request->hasFile('logo'))
            {
                $filename = time().'.'.$request->logo->getClientOriginalExtension();
                $data['logo'] = $request->logo->storeAs('images/branch', $filename, 'public');
            }
            $data['created_by'] = 1; //Auth()->id();
            $data = Branch::create($data);
        }
        else
        {
            if ($request->hasFile('logo')) {
                if(File::exists('storage/'.$request->old_logo))
                {
                    File::delete('storage/'.$request->old_logo);
                }
                $filename = time().'.'.$request->logo->getClientOriginalExtension();
                $data['logo'] = $request->logo->storeAs('images/branch', $filename, 'public');
            }
            $data['updated_by'] = 1; //Auth()->id();
            Branch::find($request->id)->update($data);
            $data = Branch::find($request->id);
        }
            
        return response($data,200);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Branch::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['updated_by'] = 1; //Auth()->id();
        $data = Branch::find($id)->update($data);
        $data = Branch::find($id);
        return response()->json($data);
    }

    public function destroy($id)
    {
        Branch::find($id)->update('deleted_by',Auth()->id());
        Branch::destroy($id);
        return response(200);
    }

}
