<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Socialite;
use Illuminate\Http\Request;

class SocialAuthController extends Controller
{
  /**
* Redirect the user to the facebook authentication page.
*
* @return Response
*/
public function redirectToProvider()
{
  return Socialite::driver('facebook')->redirect();
}

/**
* Obtain the user information from facebook.
*
* @return Response
*/
public function handleProviderCallback()
{
  try {
    $user = Socialite::driver('facebook')->user();
  } catch (Exception $e) {
    return redirect('/');
  }
  $authuser = $this->findOrCreate($user);
  Auth::login($authuser, true);
  return redirect('/home');

  }
  private function findOrCreate($facebookUser)
  {
     $fbuser = User::where('fb_id', $facebookUser->id)->first();
     if ($fbuser) {
       return $fbuser;
     }else {
       return User::create([
         'name'   =>  $facebookUser->name,
         'email'  =>  $facebookUser->email,
         'fb_id'  =>  $facebookUser->id,
         'avatar' =>  $facebookUser->avatar
       ]);
     }
  }
}
