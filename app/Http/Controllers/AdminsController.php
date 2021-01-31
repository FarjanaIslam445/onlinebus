<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminsController extends Controller
{
    public function adminlogin()
    {
        return view('adminlogin');
    }

    public function loginProcess(Request $request){

        //dd($request->all());


        $login = $request->only('email', 'password');
        //dd($login);

        if (Auth::attempt($login)) {  
           // dd(auth()->user());
            return redirect()->route('dashboard');
        }else{

            return redirect()->back()->with('msg','Invalid Credential');
        }
       
    }
    public function logouts()
    {

  Auth::logout();
  return redirect()->back();

    }
 
}


    

    
   