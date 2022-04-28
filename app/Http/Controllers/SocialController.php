<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function redirectFacebook() {
            return Socialite::driver('facebook')->redirect();
    }
    public function callbackFacebook(){
        try {
            $facebookUser = Socialite::driver('facebook')->user();
            $findUser = User::where('fb_id', $facebookUser->id)->first();
            echo ($findUser);
            if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended('pacientes');
            }else {
                $newUser = User::create([
                    'name' => $facebookUser->name,
                    'email' => $facebookUser->email,
                    'fb_id' => $facebookUser->id,
                    'password' => encrypt('123456789'),
                ]);
                Auth::login($newUser);
                return redirect()->intended('pacientes');

            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
