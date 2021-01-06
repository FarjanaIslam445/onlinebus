<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminsController extends Controller
{
    public function registrationform()
    {
        return view('rej');
    }
    public function registrationview()
    {
        return view('rejview');
    }

    public function store(Request $request){

      

        $this->validate($request,[
         'name' =>  'required',
         'email' =>  'required',
         'contact' =>  'required',
         'address' =>  'required',
         'password'=>'required',
        ]);

     
 
        $admins = new Admin();
        $admins->name  = $request->input('name');
        $admins->email  = $request->input('email');
        $admins->phone  = $request->input('contact');
        $admins->Adress  = $request->input('address');
        $admins->password  = $request->input('password');
        $admins->save();

        
        
 
        return redirect()->back()->with('msg','Registration Successfully.');
        

}

}


    

    
   