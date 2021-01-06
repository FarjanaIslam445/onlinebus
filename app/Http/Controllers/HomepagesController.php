<?php

namespace App\Http\Controllers;
use App\Models\Homepage;
use App\Models\Trip;
use App\Models\Bus;
use App\Models\Location;

use Illuminate\Http\Request;

class HomepagesController extends Controller
{
    public function homepage(){

        $locations =  Location::all(); 
        $buses  = Bus::all();
        $trips  = Trip::all();
    return view('frontend.bookingpage',compact('buses','locations','trips'));
}

public function homepagestore(Request $request){


    $this->validate($request,[
    
        'from' =>  'required',
        'to' =>  'required',
        'coach_type'=>'required',
        'date' =>  'required',
        'time' =>  'required', 
        
       ]);


       $lookingDate=$request->date;

      // dd($lookingDate);


       $trips =Trip::where('location_from',$request->from)
         ->where('location_to',$request->to)
         ->where('bus_type',$request->coach_type)
       ->get();
       
       $buses = Bus::where('bus_type','=',$request->bus_type)
       ->get();

       $locations = Location::where('id','=',$request->id)
       ->get();
      return view('bookinglist',compact('trips','lookingDate'));

       
       

       return redirect()->back()->with('msg','Submit Successfully.');

}
public function bookinglist()
{


    $trips =  Trip::all();

    
    return view('bookinglist',compact('trips'));
}





}
