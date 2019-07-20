<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\Http\Requests;
use App\Http\Requests\RoleFormRequest;

class RolesController extends Controller
{
	public function index()
	{
		$roles = Role::all();
		return view('backend.roles.index', compact('roles'));
	}
	
    public function create()
	{
		return view('backend.roles.create');
	}

	public function edit($id)
    {
        $roles = Role::find($id);
        return view('backend.roles.edit', compact('roles'));        
    }

	public function store(RoleFormRequest $request)
    {
        
        $role = new Role([
            'name' => $request->get('name'),
			'display_name' => $request->get('display_name'),
			'description' => $request->get('description')
        ]);
        $role->save();
        return redirect('/admin/roles/create')->with('success', 'A new role has been created!');
    }

    public function update(RoleFormRequest $request, $id)
    {
        $roles = Role::find($id);
        $role->name =  $request->get('name');
        $role->display_name = $request->get('display_name');
        $role->description = $request->get('description');
        $role->save();

        return redirect('/admin/roles/index')->with('success', 'A new role has been updated!');
    }
}
