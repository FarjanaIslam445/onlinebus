<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationsController extends Controller
{
    public function locationform()
    {
        return view('locationform');
    }

    //store
    
    public function locationstore (Request $request){

        {
           $this->validate($request,[
               'location_name' =>  'required',
               'status' =>  'required',
           ]);
   
              $locations = new Location();
              $locations->location_name  = $request->input('location_name');
              $locations->status  = $request->input('status');
   
              $locations->save();
   
   
              return redirect()->back()->with('msg','Submit Successfully.');
              
           }
            }
//list
            public function locationlist(){
               

                $locations =  Location::all();
            
            
                return view('locationlist',compact('locations'));
                }


//edit
public function locationedit($id)
{
     $locations= Location::find($id);
     return view('locationedit',compact('locations'));

}

public function locationupdate(Request $request,$id)
{
    $this->validate($request,[
     'location_name' =>  'required',
     'status' =>  'required',


     

    ]);
    $locations = Location::find($id);
    $locations->location_name = $request->input('location_name');
    $locations->status = $request->input('status');
    
    $locations->save();
    return redirect(route('locationlist'))->with('msg','Upadte Successfully.');
}
public function locationdelete($id){
    Location::find($id)->delete();
    return redirect()->back()->with('msg','Submit Successfully.');
}


}


           









