<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Bookingdetail;
use App\Models\User;
class ConfirmsController extends Controller
{
    public function confirmtable($id)
    {
        //dd($id);
        $bookingdeta = Bookingdetail::where('booking_id',$id)->get();
        $users =  User::all();
    
        
    return view('confirm',compact('bookingdeta','users'));
    }



    

}