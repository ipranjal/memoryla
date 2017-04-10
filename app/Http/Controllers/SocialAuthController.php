<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Socialite;
use App\User;

class SocialAuthController extends Controller {

    public function redirect($provider) {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider) {
      $providerUser = \Socialite::driver($provider)->user(); 
      $user=User::where('email',$providerUser->getEmail())->first();
      if(!$user){
          $user = new User();
          $user->email = $providerUser->getEmail();
          $user->name =  $providerUser->getName();
          $user->save();
      }
       Auth::login($user, true);
       return redirect('/');
    }

}
