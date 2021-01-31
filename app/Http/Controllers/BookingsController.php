<?php

namespace App\Http\Controllers;
use\App\Models\Seat;
use Illuminate\Http\Request;
use App\Models\Booking;
use\App\Models\Bookingdetail;
use App\Models\Homepage;
use App\Models\User;
use Auth;

class BookingsController extends Controller
{
    public function bookingtable()
    {
        $bookings = Booking::all();
        //dd($bookings);
        $bookingDate=Homepage::all();
        // dd($lookingDate);
        
        return view('bookingtable',compact('bookings'));
    }
    public function bookingdetails()
   
   { 
       $bookingdeta = Booking::with('details')->where('user_id',auth()->user()->id)->get();

    //   dd($bookingdeta);
        return view('bookingdetails',compact('bookingdeta'));
    }
    public function bookdelete($id){
        Bookingdetail::find($id)->delete();
        return redirect()->back()->with('msg','Submit Successfully.');
    }

  
    
}
