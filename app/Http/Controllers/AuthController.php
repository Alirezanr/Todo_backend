<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([ 'email'    => 'required|string',
                             'password' => 'required|string' ]);

        $credentials = request([ 'email', 'password' ]);

        if (!Auth::attempt($credentials))
        {
            return response()->json([ 'message' => 'Invalid email or password' ], 401);
        }
        $user = User::firstWhere('email', $request->get('email'));

        // $user = $request->user();

        $token = $user->createToken('Access Token');

        $user->access_token = $token->accessToken;

        return response()->json([ 'message' => 'Successfully logged in',
                                  'user'    => $user ], 200);
    }

    public function signup(Request $request)
    {
        $request->validate([ 'name'     => 'required|string',
                             'email'    => 'required|string|email|unique:users',
                             'password' => 'required|string|confirmed' ]);

        $user = new User([ 'name'              => $request->name,
                           'email'             => $request->email,
                           'profile_image_url' => $request->profile_image_url,
                           'password'          => bcrypt($request->password) ]);

        $user->save();
        $token = $user->createToken('Access Token');

        $user->access_token = $token->accessToken;


        return response()->json([ "message" => "User registered successfully",
                                  "user"    => $user ], 201);

    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([ "message" => "User logged out successfully" ], 200);
    }

    public function index()
    {
        return response()->json([ "user" => Auth::user() ], 202);
    }
}
