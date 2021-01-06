<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Report;

class ReportsController extends Controller
{
    public function reportform()
    {
        return view('reportform');
    }
    public function reportstore (Request $request){

        {
           $this->validate($request,[
               'name' =>  'required',
               'details' =>  'required',
           ]);
   
           $reports = new Report();
              $reports->name  = $request->input('name');
              $reports->details  = $request->input('details');
   
              $reports->save();
   
   
              return redirect()->back()->with('msg','Submit Successfully.');
              
           }

        }
        public function reportlist(){
               

            $reports =  Report::all();
     
     
            return view('reportlist',compact('reports'));
            }
    












        }





        
    

