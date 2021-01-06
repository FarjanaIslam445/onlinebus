<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Trip;
use\App\Models\Seat;
use\App\Models\Booking;
use\App\Models\Bookingdetail;
class SeatsController extends Controller
{
    public function seat($id,$date)
    {
      // dd($id,$date);
      
    return view('seat',compact('id')); 
}
public function seatstore (Request $request){


   // dd($request->all());
    $this->validate($request,[
        'Seat_number.*' =>  'required',

    ]);


    $price = Trip::find($request->trip_id);
    // dd($price);
    $booking=Booking::create([
        'user_id'=>auth()->user()->id,
        'price'=>count($request->Seat_number)*$price->price,
        'trip_id'=>$request->trip_id,
        'journey_date'=>'2021-1-1'
    ]);
    
         
     foreach($request->Seat_number as $seat)
    {
        $bookingdetails=Bookingdetail::create([
            'booking_id'=>$booking->id,
            'price'=>$price->price,
            'seat_number'=>$seat,
            'trip_id'=>$request->trip_id,
            
                ]);
    }
    
       return redirect()->back()->with('msg','Submit Successfully.');
       
    
 }


}