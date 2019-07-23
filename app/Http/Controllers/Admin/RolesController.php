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
		$roles = Role::all();
		return view('backend.roles.index', compact('roles'));
	}

	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
	{
		return view('backend.roles.create');
	}

	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store(RoleFormRequest $request)
    {
        
        $role = new Role([
            'name' => $request->get('name'),
			'display_name' => $request->get('display_name'),
			'description' => $request->get('description')
        ]);
        $role->save();
        return redirect('/admin/roles/create')->with('success', 'Role created!');
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
        $roles = Role::find($id);
        return view('backend.roles.edit', compact('roles'));        
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
        $roles = Role::find($id);
        $role->name =  $request->get('name');
        $role->display_name = $request->get('display_name');
        $role->description = $request->get('description');
        $role->save();

        return redirect('/admin/roles/index')->with('success', 'Role updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roles = Role::find($id);
        $role->delete();

        return redirect('/admin/roles/index')->with('success', 'Role deleted!');
    }
}
