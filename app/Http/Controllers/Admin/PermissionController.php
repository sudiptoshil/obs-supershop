<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::latest()->get();
        
        //$modules_html= $this->headRecursive($modules);
        return view('admin.permission.index')->with('permissions', $permissions);
     }

    public function GetByParentId($id)
    {
        // $data = Permission::whereNull('parent_id')
        //         ->with('child')->where('id','=',$id)->get();
        
        //For Imidiate Child
        $data = Permission::with('imidiateChild')->where('id','=',$id)->get();
        dd($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'code' => 'required'
        ]);

        $data = $request->all();
        $data['created_by'] = 1; //Auth()->id();

        Permission::create($data);
        return redirect()->back()->with('Smsg', 'Save Successful.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Permission::find($id);
        return view('permission.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'code' => 'required'
        ]);

        $data = $request->all();
        $data['updated_by'] = 1; //Auth()->id();
        Permission::find($id)->update($data);
        return redirect()->to('permission.index')->with('Smsg', 'update Successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::destroy($id);
        return redirect()->to('permission.index')->with('Smsg', 'Delete Successful.');
    }

   
}
