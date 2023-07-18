<?php

namespace App\Http\Controllers\Actor;

use App\Http\Controllers\Controller;
use App\Models\Actor\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RolePermissionController extends Controller
{

    function view_roles()
    {
       /** @var \App\Models\Actor\User */
       if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_role"))
       {
            return view("errors.role_permission_error");
       }
       return view("basic.roles");
    }
    function load_roles(Request $request)
    {
       /** @var \App\Models\Actor\User */
       if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_role"))
       {
            return view("errors.role_permission_error");
       }
       $roles=Role::where('name', 'LIKE', "%{$request->key}%")->get();
       foreach($roles as $role)
       {
            $role["permissions"]=$role->Permissions;
       }
       return $roles;
    }
}
