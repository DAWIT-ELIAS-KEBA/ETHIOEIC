<?php

namespace App\Http\Controllers\Actor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Actor\Role;
use App\Models\Actor\Permission;
use App\Models\Actor\User;
use Illuminate\Support\Facades\Validator;
use DataTables;
class UsersController extends Controller
{
    function view_users(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_users"))
        {
            return "";
        }
        return view("basic.users");
    }
    function load_users(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_users"))
        {
            return "";
        }

        $data = User::latest()->orderBy("name","ASC")->get();

        return DataTables::of($data)
            ->addIndexColumn()

            ->addColumn('roles', function($row){
               $html="<table>";
               foreach($row->roles as $role)
               {
                    $html.="<tr><td style='padding:0px'>".$role->name."</tr>";
               }
               $html.="</table>";
               return $html;
            })
            ->addColumn('permissions', function($row){
                 return $row->permissions->count();
             })
            ->addColumn('last_login', function($row){
                if($row->last_login==null)
                {
                    return '<span style="color:red">NotLoggedIn<span>';
                }
                else
                {
                    return $row->last_login;
                }
            })


            ->addColumn('user_status', function($row){
                if($row->status==1)
                {
                    return '<span class="badge bg-success">ENABLED<span>';
                }
                else
                {
                    return '<span class="badge bg-danger">DISABLED<span>';
                }
            })

            ->addColumn('view_permissions', function($row){
                return "<button class='btn btn-sm btn-secondary'>view permissions</button>";
            })
            ->addColumn('change_status', function($row){
                if($row->status==1)
                {
                    return "<button class='btn btn-sm btn-warning'>Disable</button>";
                }
                else
                {
                    return "<button class='btn btn-sm btn-success'>Enable</button>";
                }
            })

            ->addColumn('update', function($row){
                return '<button class="btn btn-sm btn-primary" onclick=\'update_user('.$row->id.')\'>view</button>';
            })

            ->addColumn('delete', function($row){

                return '<button class="btn btn-sm btn-danger" onclick=\'delete_user('.$row->id.')\'>delete</button>';
                })

            ->rawColumns(['roles','permissions','last_login','user_status','view_permissions','change_status','update','delete'])

            ->make(true);

    }
    function add_new_user(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("add_new_user"))
        {
            return "";
        }

        $rules=["user_name"=>"required|regex:/^[a-zA-Z\s-]+ $/",
                "email"=>"required|email|unique:App\Models\Actor\User,email"];

        $messages=array(
            "user_name.required"=>"Enter user name!!",
            "user_name.regex"=>"User name should contains only alphabet characters!!",
            "email.required"=>"Enter the user email",
            "email.email"=>"Enter valid user email!",
            "email.unique"=>"Duplicate email is not allowed!!"
        );

        $validator = Validator::make($request->all(), $rules,$messages);

        if ($validator->fails())
        {
            $html="<ul>";
            foreach($validator->errors()->all() as $error)
            {
                $html.="<li>".$error.'</li>';
            }
            $html.="</ul>";
            return $html;
        }

        User::create(["name"=>$request->user_name,"added_by"=>Auth::user()->id]);

        return "yes";
    }
}
