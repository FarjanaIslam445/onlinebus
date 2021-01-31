<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    Public function login()
        {
         
            return view('User.login');
        }



        public function loginput (Request $request)
        {
            $this->validate($request,[
                'email' =>  'required',
                'password' =>  'required',
            ]);
            
            $credentials=  $request->except('_token');
            
                
        
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
        
                    return redirect()->intended('frontpage');
                }else
                {

                    return redirect()->back()->withErrors('Invalid Credentials');
                }
         
    
    
            }


            public function logout()
            {

          Auth::logout();
          return redirect()->back();

            }
}
