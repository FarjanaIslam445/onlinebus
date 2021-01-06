<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;

class BusController extends Controller
{
    public function busform(){

    
    return view('busform');
    }
    public function busint(Request $request){
            
        $this->validate($request,[
            'bus_type' =>  'required',
            'seat_capacity' =>  'required',
            'coach_number'=>'required',
            'bus_availablity'=>'required',
            'seat_availablity'=>'required',
            'seat_availablity'=>'required',
            
           ]);
   
        
    
           $buses = new Bus();
           $buses->bus_type  = $request->input('bus_type');
           $buses->seat_capacity  = $request->input('seat_capacity');
           $buses->coach_number =$request->input('coach_number');
           $buses->bus_availablity=$request->input('bus_availablity');
           $buses->seat_availablity=$request->input('seat_availablity');
           $buses->seat_number=$request->input('seat_number');
           $buses->save();
        
   
           
           
    
           return redirect()->back()->with('msg','Submit Successfully.');
        }
        public function busview(){
               

            $buses =  Bus::all();
     
     
            return view('busview',compact('buses'));
            }
//edit
    
public function busedit($id)
{
     $bus= Bus::find($id);
     return view('busedit',compact('bus'));

}

public function busupdate(Request $request,$id)
{
    $this->validate($request,[
     'bus_type' =>  'required',
     'seat_capacity' =>  'required',
     'coach_number'=>'required',
     'bus_availablity'=>'required',
     'seat_availablity'=>'required',
     'seat_number'=>'required',

     

    ]);
    $bus = Bus::find($id);
    $bus->bus_type = $request->input('bus_type');
    $bus->seat_capacity = $request->input('seat_capacity');
    $bus->coach_number =$request->input('coach_number');
    $bus->bus_availablity=$request->input('bus_availablity');
    $bus->seat_availablity=$request->input('seat_availablity');
    $bus->seat_number=$request->input('seat_number');
    $bus->save();
    return redirect(route('busview'))->with('msg','Upadte Successfully.');
}
public function busdelete($id){
    Bus::find($id)->delete();
    return redirect()->back()->with('msg','Submit Successfully.');
}


}
