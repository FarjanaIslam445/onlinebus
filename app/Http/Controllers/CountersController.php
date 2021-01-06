<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;

class CountersController extends Controller
{
    Public function Counterform ()
    {
        return view('counterform');
    }
    public function cinput(Request $request){
        $this->validate($request,[
            'location' =>  'required',
            'phone' =>  'required',
            
            
           ]);
   
        
    
           $counters = new Counter();
           $counters->location  = $request->input('location');
           $counters->phone  = $request->input('phone');

           
           $counters->save();
   
           
           
    
           return redirect()->back()->with('msg','Submit Successfully.');
   
   }
   Public function counterview(){
    $counters =  Counter::all();


    return view('counterview',compact('counters'));
   }
       
   //edit
   public function counteredit($id)
   {
        $counters= Counter::find($id);
        return view('counteredit',compact('counters'));
   
   }
   
   public function counterupdate(Request $request,$id)
   {
       $this->validate($request,[
        'location' =>  'required',
        'phone' =>  'required',

   
        
   
       ]);
       $counters = Counter::find($id);
       $counters->location = $request->input('location');
       $counters->phone = $request->input('phone');
       
       $counters->save();
       return redirect(route('counterview'))->with('msg','Upadte Successfully.');
   }
   public function counterdelete($id){
       Counter::find($id)->delete();
       return redirect()->back()->with('msg','Submit Successfully.');
   }
   
   
   
   
  
}
