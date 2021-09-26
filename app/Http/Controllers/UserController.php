<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(3);
        return view('users.index', compact('users'));
        
    }

    public function create()
    {
        $roles = Role::all()->pluck('name', 'id');

        return view('users.create', compact('roles'));
    }

    public function store(UserStoreRequest $request)
    {
        $validated=$request->validated();

        $validated = User::create($request->only('name', 'username', 'email')
            + [
                'password' => bcrypt($request->input('password'))
            ]);

        $roles = $request->input('roles', []);
        $validated->syncRoles($roles);
        return redirect()->route('users.show', $validated->id)->with('success', 'Usuario creado correctamente');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|min:3|max:24',
            'username' => ['required', 'min:3', 'unique:users,username,'],
            'email' => ['required', 'unique:users,email,'],
            'password' => 'sometimes'
        ]);
        $user = User::findOrFail($id);

        $data = $request->only('name', 'username', 'email');
        $password = $request->input('password');
        if ($password)
            $data['password'] = bcrypt($password);

        $user->update($data);
        return redirect()->route('users.show', $user->id)->with('success', 'Registro actualizado con exito');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('success', 'Usuario eliminado con exitosamente');
    }

   
}
