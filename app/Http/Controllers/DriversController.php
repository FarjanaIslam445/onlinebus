<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriversController extends Controller
{
    public function Driverform()
    {
        return view('Driver');
    }
    
        public function dstore(Request $request){
            
            $this->validate($request,[
                'name' =>  'required',
                'age' =>  'required',
                'phone' =>  'required',
                'vote_id_no' =>  'required',
                'driver_licence_no'=> 'required',
               ]);
       
            
        
               $drivers = new Driver();
               $drivers->name  = $request->input('name');
               $drivers->age  = $request->input('age');
               $drivers->phone  = $request->input('phone');
               $drivers->vote_id_no  = $request->input('vote_id_no');
               $drivers->driver_licence_no=$request->input('driver_licence_no');
               $drivers->save();
       
               
               
        
               return redirect()->back()->with('msg','Submit Successfully.');
       
       }

       public function Driverview(){
        $drivers =  Driver::all();


        return view('Dvrview',compact('drivers'));
       }
       public function driveredit($id)
       {
            $drivers= Driver::find($id);
            return view('driveredit',compact('drivers'));

       }
      
       public function driverupdate(Request $request,$id)
       {
           $this->validate($request,[
            'name' =>  'required',
            'age' =>  'required',
            'phone' =>  'required',
            'vote_id_no' =>  'required',
            'driver_licence_no' =>'required',

           ]);
           $drivers = Driver::find($id);
           $drivers->name  = $request->input('name');
           $drivers->age  = $request->input('age');
           $drivers->phone  = $request->input('phone');
           $drivers->vote_id_no  = $request->input('vote_id_no');
           $drivers->driver_licence_no =$request->input('driver_licence_no');
           $drivers->save();
           return redirect(route('Dvrview'))->with('msg','Upadte Successfully.');
       }
       public function driverdelete($id){
        Driver::find($id)->delete();
        return redirect()->back()->with('msg','Submit Successfully.');
    }






       }
       
       
    


