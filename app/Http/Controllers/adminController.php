<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class adminController extends Controller
{
    
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function dashboard2(){
        return view('admin.dashboard2');
    }
    public function dashboard1(){
        return view('admin.dashboard2');
    }


    public function investors(){
        return view('admin.investors');
    }

    public function dashboard3(){
        return view('admin.dashboard3');
    }
    public function dashboard4(){
        return view('admin.dashboard4');
    }
    public function dashboard5(){
        return view('admin.dashboard5');
    }
    public function dashboard6(){
        return view('admin.dashboard6');
    }
    public function dashboard7(){
        return view('admin.dashboard7');
    }
    public function dashboard8(){
        return view('admin.dashboard8');
    }
    
    public function dashboard9(){
        return view('admin.dashboard9');
    }
        public function dashboard10(){
        return view('admin.dashboard10');
    }
    public function dashboard11(){
        return view('admin.dashboard11');
    }

    public function notofication(){
        return view('admin.notofication');
    }

    public function terms_conditions(){
        return view('admin.terms_conditions');
    }
    public function checkout(){
        return view('admin.checkout');
    }
    public function login1(){
        return view('admin.login1');
    }
    public function signup(){
        return view('admin.sign-up');
    }
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
    
    
    



}



