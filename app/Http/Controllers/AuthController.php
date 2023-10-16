<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register( Request $request){
        $data = $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            
        ]);

        // Set default role to 'admin' if not provided in the request
        $userData = array_merge($data, ['role' => $data['role'] ?? 'admin']);


        // Mass assign the validated request data to a new instance of the User model
        $user = User::create($userData);
        $token = $user->createToken('my-token')->plainTextToken;

        return response()->json([
            'token' =>$token,
            'Type' => 'Bearer'
        ]);
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $fields['username'])->first();

        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Wrong credentials'
            ]);
        }

        $token = $user->createToken('my-token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'Type' => 'Bearer',
            'role' => $user->role // include user role in response
        ]);
    }
    public function show(){
        return " All users are shown here";
    }
        
    public function update(Request $request , $id){
        return " All updates on users are done here";
    }
}
