<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    Public function userform()
    {
        return view('userform');
    }
    public function userinsert(Request $request){
            
        $this->validate($request,[
            'name' =>  'required',
            'email' =>  'required',
            'phone' =>  'required',
            'role' =>  'required',
            'password'=>'required',
            
           ]);
   
        
    
           $users = new User();
           $users->name  = $request->input('name');
           $users->email  = $request->input('email');
           $users->phone  = $request->input('phone');
           $users->role  = $request->input('role');
           $users->password  = bcrypt($request->input('password'));


           $users->save();

   
           
           
    
           return redirect()->back()->with('msg','Submit Successfully.');
        }
           public function userview(){
               

           $users =  User::all();
    
    
           return view('userview',compact('users'));
           }
          
           



           public function useredit($id)
           {
                $users= User::find($id);
                return view('useredit',compact('users'));
           
           }
           
           public function userupdate(Request $request,$id)
           {
               $this->validate($request,[
                'name' =>  'required',
                'email' =>  'required',
                'phone' =>  'required',
                'role' =>  'required',
                'password'=>'required',
           
                
           
               ]);
               $users = User::find($id);
               $users->name = $request->input('name');
               $users->email = $request->input('email');
               $users->phone = $request->input('phone');
               $users->role = $request->input('role');
               $users->password  = bcrypt($request->input('password'));
               $users->save();
               return redirect(route('userview'))->with('msg','Update Successfully.');
           }
           public function userdelete($id){
               User::find($id)->delete();
               return redirect()->back()->with('msg','Submit Successfully.');
           }
           
           






}
