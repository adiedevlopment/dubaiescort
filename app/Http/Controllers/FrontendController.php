<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escort;
use App\Models\Beach;
class FrontendController extends Controller
{
     public function welcome()
    {
            $escort = Escort::first(); // ya find(1), ya koi bhi specific escort
          $escorts = Escort::with('thumbnails')->get();
          $gender = 'Female'; // Ya dynamic value
              $location = 'Delhi'; // ya dynamic dat
 $escorts = Escort::where('status', 'active')
                    ->where('category', 'female-escorts') // ya 'female' if that's your DB value
                    ->get();

                     $vipEscorts = Escort::where('vip', 1)->latest()->get();
                     $beach = Beach::first(); // or use find(id), or where(), etc.

        return view('welcome',compact('escorts' , 'gender' , 'location' , 'escort' , 'vipEscorts' , 'beach'));
    }



}



