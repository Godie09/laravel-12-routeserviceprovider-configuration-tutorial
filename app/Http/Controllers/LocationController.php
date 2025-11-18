<?php

namespace App\Http\Controllers;

use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
     public function show(Request $request)
        {
            // Get client IP from the request
            $ip = $request->ip();

            // Resolve position
            $position = Location::get($ip);       

            return view('location', compact('position'));
        }

        public function test(){
            return "Testing....";
        }
}
