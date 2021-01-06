<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Route;

class RoutsController extends Controller
{
    public function routform()

    {
        return view('routform');
    }
    public function routstore (Request $request){

        {
           $this->validate($request,[
               'to' =>  'required',
               'from' =>  'required',
               
           ]);
   
           $routs = new Route();
              $routs->to  = $request->input('to');
              $routs->from =$request->input('from');
   
              $routs->save();
   
   
              return redirect()->back()->with('msg','Submit Successfully.');
              
           }
}

public function routlist(){
               

    $routs =  Route::all();


    return view('routlist',compact('routs'));
    }
 //edit
 public function routeedit($id)
 {
      $routes= Route::find($id);
      return view('routeedit',compact('routes'));
 
 }
 
 public function routeupdate(Request $request,$id)
 {
     $this->validate($request,[
      'to' =>  'required',
      'from' =>  'required',
      
 
      
 
     ]);
     $routes = Route::find($id);
     $routes->to = $request->input('to');
     $routes->from = $request->input('from');

     $routes->save();
     return redirect(route('routlist'))->with('msg','Upadte Successfully.');
 }
 public function routedelete($id){
     Route::find($id)->delete();
     return redirect()->back()->with('msg','Submit Successfully.');
 }
 
 
 





}
