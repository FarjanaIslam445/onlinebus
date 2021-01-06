<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Trip;
use\App\Models\Route;
use\App\Models\Homepage;
use\App\Models\Bus;
use\App\Models\Location;
class TripsController extends Controller
{
    public function tripform()
    {
        $locations =  Location::all(); 
        $buses =  Bus::all();
        return view('tripform',compact('buses','locations'));
        
        //return view('tripform');
        
    }
    public function tripstore (Request $request){

        $this->validate($request,[
            'date' =>  'required',
            'reporting' =>  'required',
            'departure' =>  'required',
            'location_from' =>  'required',
            
            'location_to' =>  'required',
            'bus_type' =>'required',
            'price' =>  'required',
            
        ]);



        $trips = new Trip();
        
        $trips->date  = $request->input('date');

           $trips->reporting  = $request->input('reporting');
           $trips->departure = $request->input('departure');
           $trips->location_from = $request->input('location_from');
           
           $trips->location_to = $request->input('location_to');
           $trips->bus_type = $request->input('bus_type');
           $trips->price = $request->input('price');
           
           $trips->save();

           
           return redirect()->back()->with('msg','Submit Successfully.');
           
        
     }



     public function triplist()
     {
               

        $trips =  Trip::with('location')->get();
        $trips =  Trip::with('locationto')->get();
        // dd($trips);
        
        
        //$buses = Bus::with('buses')->get();
        
        $homepages =Homepage::all();
        $buses = Bus::all();
        $locations =Location::all();
  
        return view('triplist',compact('trips'));
        }
//edit
    
public function tripedit($id)
{
     $trip= Trip::find($id);
     return view('tripedit',compact('trip'));

}

public function tripupdate(Request $request,$id)
{
    $this->validate($request,[
     'date' =>  'required',
     'reporting' =>  'required',
     'departure'=>'required',
     'location_from' =>  'required',
            
      'location_to' =>  'required',
      'bus_type' =>'required',
      'nonac_bdt' =>  'required',
       'ac_bdt' =>  'required',
     

     

    ]);
    $trip = Trip::find($id);
    $trip->date = $request->input('date');
    $trip->reporting = $request->input('reporting');
    $trip->departure =$request->input('departure');
    $trips->location_from = $request->input('location_from');
           
    $trips->location_to = $request->input('location_to');
    $trips->bus_type = $request->input('bus_type');
    $trips->nonac_bdt = $request->input('nonac_bdt');
    $trips->ac_bdt  = $request->input('ac_bdt');
    $trip->save();
    return redirect(route('triplist'))->with('msg','Upadte Successfully.');
}
public function tripdelete($id){
    Trip::find($id)->delete();
    return redirect()->back()->with('msg','Submit Successfully.');
}
   

    }














