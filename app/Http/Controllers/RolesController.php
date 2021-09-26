<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::paginate(5);
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all()->pluck('name', 'id');
        // dd($permission);
        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::create($request->only('name'));

        // $role->permissions()->sync($request->input('permissions', []));
        $role->syncPermissions($request->input('permissions', []));

        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
        $role->load('permissions');
        //$rol = Role::findOrFail($id);
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
        
    //     $permissions = Permission::all()->pluck('name', 'id');
    //     $id->load('permissions');
    //     dd($id);
    //     $rol = Role::findOrFail($id);
    //     return view('roles.edit', compact('rol'));
    // }
    public function edit(Role $role)
    {
        

        $permissions = Permission::all()->pluck('name', 'id');
        $role->load('permissions');
        
        return view('roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    //     $request->validate(['name' => 'required|min:3|max:24|unique:permissions',]);
    //     $rol = Role::findOrFail($id);
    //     $data = $request->only('name');
        
    //     $rol->update($data);
    //     return redirect()->route('roles.show', $rol->id);
    // }
    public function update(Request $request, Role $role)
    {
        $role->update($request->only('name'));

        $role->permissions()->sync($request->input('permissions', []));
        //$role->syncPermissions($request->input('permissions', []));

        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $rol = Role::find($id);
        $rol->delete();
        return back();
    }
}
