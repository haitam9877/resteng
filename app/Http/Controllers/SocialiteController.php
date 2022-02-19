<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
     public function redirect($service){

        return Socialite::driver($service)->redirect();
     }

     public function callback($service){

       return  $user = Socialite::with($service)->user();
      //  return response()->json($user);
     }
}
