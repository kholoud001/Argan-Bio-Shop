<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index(){
        return view('Auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        try {
            // Create the user
            $user = User::create([
                'email' => $request->email,
                'name' => $request->name,
                'password' => Hash::make($request->password),
                'role' => 'user',
            ]);

            // Return a JSON response indicating success
            $response = new JsonResponse(['message' => 'You have been registered!'], 200);

            // Add JavaScript to redirect after 5 seconds
            $response->header('Refresh', '5;url=' . route('login'));

            return $response;
        } catch (\Exception $e) {
            // Return a JSON response indicating failure
            return new JsonResponse(['error' => 'Registration failed. Please try again.'], 500);
        }
    }

}
