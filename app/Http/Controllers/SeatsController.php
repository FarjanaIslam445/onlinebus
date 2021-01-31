<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Trip;
use\App\Models\Seat;
use\App\Models\Booking;
use\App\Models\Bookingdetail;
use\App\Models\Homepage;
class SeatsController extends Controller
{
    public function seat($id,$date)
    {
     //  dd($date);

       $trip=Bookingdetail::select('seat_number')->where('trip_id',$id)->whereDate('journey_date',$date)->get();
      // dd($trip);
     $booked=$trip->pluck('seat_number');
//dd($booked);
      
    return view('seat',compact('id','date','booked')); 
}
public function seatstore (Request $request){


   // dd($request->all());
    $this->validate($request,[
        'Seat_number.*' =>  'required',

    ]);

    $date=Homepage::find($request->date);
    $price = Trip::find($request->trip_id);
    // dd($price);
    $booking=Booking::create([
        'user_id'=>auth()->user()->id,
        'price'=>count($request->Seat_number)*$price->price,
        'trip_id'=>$request->trip_id, 
        'journey_date'=>$request->date,
    ]);
    
         
     foreach($request->Seat_number as $seat)
    {
        
        $bookingdetails=Bookingdetail::create([
            'booking_id'=>$booking->id,
            'price'=>$price->price,
            'seat_number'=>$seat,
            'journey_date'=>$request->date,
            'trip_id'=>$request->trip_id,
            
            
        ]);
        //dd($bookingdetails);
    }
    
       return redirect()->back()->with('msg','Submit Successfully.');
       
    
 }


}