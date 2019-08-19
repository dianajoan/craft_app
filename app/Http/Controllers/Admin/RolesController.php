<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\Http\Requests;
use App\Http\Requests\RoleFormRequest;

class RolesController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
	{
        $roles = Role::paginate(5);
		return view('admin.roles.index', ['roles' => $roles]);
	}

	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
	{
		return view('admin.roles.create');
	}

	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store(RoleFormRequest $request)
    {
        
        //validate input fields
        request()->validate([
            'name' => 'required',
            'display_name' => 'required',
        ]); 
 
        //save data into database
        Role::create($request->all());
        //redirect to role index page
        return redirect()->route('roles.index')->with('success','Role add successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        return view('admin.roles.show', ['role' => $role]);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function edit($id)
    {
        $role = Role::find($id);
        return view('admin.roles.edit', ['role' => $role]);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleFormRequest $request, $id)
    {
        //validate input fields
        request()->validate([
            'name' => 'required',
            'display_name' => 'required',
        ]); 
 
        //save data into database
        Role::create($request->all());
        //redirect to role index page
        return redirect()->route('roles.index')->with('success','Role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        return redirect()->route('roles.index')->with('success','Role deleted successfully');
    }
}
