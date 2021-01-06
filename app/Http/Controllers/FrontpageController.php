<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function frontpage()
    {
        return view('frontend.frontpage');
    }
}
