<?php

namespace App\Http\Controllers;
use\App\Models\Seat;
use Illuminate\Http\Request;
use App\Models\Booking;
use\App\Models\Bookingdetail;
use App\Models\Homepage;

class BookingsController extends Controller
{
    public function bookingtable()
    {
        $bookings = Booking::all();
        $bookingDate=Homepage::all();
        // dd($lookingDate);
        
        return view('bookingtable',compact('bookings'));
    }
    public function bookingdetails()
   
   { 
       $bookingdeta = Bookingdetail::all();
       
    
        return view('bookingdetails',compact('bookingdeta'));
    }
   

    
}
