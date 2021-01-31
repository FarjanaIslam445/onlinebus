<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Payment;
use\App\Models\Booking;
use\App\Models\Bookingdetail;

class ProfileController extends Controller
{
    public function payment($id)
    {
        $booking = Booking::find($id);
        // ::find($id);
        // dd($booking);

       return view('Payment',compact('booking'));
    }

    public function paystore (Request $request,$id){

        {
           $this->validate($request,[
               'send_from' =>  'required',
               'transection_number' =>  'required',
               'payment_method' =>  'required',
               'ammount' =>  'required',
           ]);
            $booking = Booking::find($id);
        
              $payments = new Payment();
              $payments->booking_id  = $booking->id;
              $payments->send_from  = $request->input('send_from');
              $payments->transection_number =$request->input('transection_number');
              $payments->payment_method =$request->input('payment_method');
              $payments->ammount =$request->input('ammount');
              $payments->save();
   
   
              return redirect()->back()->with('msg','Submit Successfully.');
              
           }
         }
         public function paylist(){
               
            $bookings = Bookingdetail::all();
        //dd($bookings);
            $payments =  Payment::all();
          
        //dd($payments->all());
            return view('paylist',compact('payments','bookings'));
            }





}







