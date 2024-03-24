<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Spatie\Permission\Models\Role;


class GoogleController extends Controller
{
    public function redirect(){
//        return Socialite::driver('google')->stateless()->redirect();
        return Socialite::driver('google')->redirect();

    }

    public function callbackGoogle()
    {
        $google_user = Socialite::driver('google')->user();

        // Check if this user is in our DB
        $user = User::where('google_id', $google_user->getId())->first();

        if (!$user) {
            // If the user doesn't exist, create a new one
            $new_user = User::create([
                'name' => $google_user->getName(),
                'email' => $google_user->getEmail(),
                'google_id' => $google_user->getId(),
                'role' => 'user'

            ]);

            Auth::login($new_user);
            return redirect('/')->with('success', 'Login successful!');
        } else {
            // If the user exists, log them in
            Auth::login($user);
            return redirect('/')->with('success', 'Login successful!');
        }

    }
}
