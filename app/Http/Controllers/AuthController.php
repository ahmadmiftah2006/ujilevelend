<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function Login(Request $R)
    {
        $user = User::where('name', $R->name)->first();

        if ($user != [] && Hash::check($R->password, $user->password)) {
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            $response = ['status' => 200, 'token' => $token, 'user' => $user, 'message' => 'Login Successfully!'];
            return response()->json($response);
        } else if ($user == []) {
            $response = ['status' => 500, 'message' => 'No account found with this username'];
        } else {
            $response = ['status' => 500, 'message' => 'Wrong username or password! please try again'];
        }
    }

    public function logout(Request $request)
    {
    //     $user = Auth::user();

    //     if ($user) {
    //         $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();
    //     }

    //     return response()->json(['message' => 'Successfully logged out']);
    }
}