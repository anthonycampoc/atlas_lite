<?php

namespace App\Http\Controllers;

use App\Models\Bunises;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('can:roles.create')->only(['create','store']);
        $this->middleware('can:roles.index')->only(['index']);
        $this->middleware('can:roles.edit')->only(['edit','update']);
        $this->middleware('can:roles.show')->only(['show']);
        $this->middleware('can:roles.destroy')->only(['destroy']);
    }

    public function index()
    {
        $imgusers= Auth::user()->image;
        $roles = Role::get();
        $business = Bunises::where('id', 1)->firstOrFail();
        return view('admin.roles.index', compact('roles','imgusers','business'));
    }

    public function create()
    {
        $imgusers= Auth::user()->image;   
        $permissions = Permission::get();
        $business = Bunises::where('id', 1)->firstOrFail();
        return view('admin.roles.create', compact('permissions','imgusers','business'));
    }

   
    public function store(Request $request)
    {
        $role = Role::create($request->all());
        $role->permissions()->sync($request->get('permissions'));
        Alert::alert()->success($request->name,'¡Se registro correctamente el rol!');
        return redirect()->route('roles.index');
    }

   
    public function show(Role $role)
    {
        $imgusers= Auth::user()->image;
           $business = Bunises::where('id', 1)->firstOrFail();
        return view('admin.roles.show', compact('role','imgusers','business'));
    }

    
    public function edit(Role $role)
    {   
        $imgusers= Auth::user()->image;
        $permissions = Permission::get();
        $business = Bunises::where('id', 1)->firstOrFail();
        return view('admin.roles.edit', compact('role', 'permissions','imgusers','business'));
    }

  
    public function update(Request $request,  Role $role)
    {
        $role->update($request->all());
        $role->permissions()->sync($request->get('permissions'));
        Alert::alert()->success($request->name,'¡Se actualizo correctamente el rol!');
        return redirect()->route('roles.index');
    }

  
    public function destroy( Role $role)
    {
        $role->delete();
        Alert::alert()->success('¡Se elimino correctamente el rol!');
        return back();
    }
}
