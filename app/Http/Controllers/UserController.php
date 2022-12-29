<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function update(Request $req, User $user)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $user = User::where('id', $req['id'])->firstOrFail();


        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;



        $user->save();

        return response()->json(['Your account has been updated successfully', 'data' => $user]);
    }

    public function login(Request $req)
    {
        $user = User::where("email", $req->email)->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return response()->json([
                "error" => "Invalid credentials"
            ], 400);
        }

        $token = $user->createToken($user->email)->plainTextToken;
        return response()->json(['message' => 'Hi ' . $user->name . ', welcome to fragrance shop :)', 'access_token' => $token, 'token_type' => 'Bearer']);
    }

    public function register(Request $req)
    {
        $user = User::where("email", $req->email)->first();
        if ($user) {
            return response()->json([
                "error" => "User with given email already exist"
            ], 400);
        }
        try {
            $user = User::create([
                "name" => $req->name,
                "email" => $req->email,
                "password" => Hash::make($req->password),
            ]);
            $token = $user->createToken($user->email)->plainTextToken;
            return response()->json(['created user' => $user, 'access_token' => $token, 'token_type' => 'Bearer']);
        } catch (Exception $ex) {
            return response()->json([
                "error" => $ex->getMessage()
            ], 500);
        }
    }

    public function logout(Request $req)
    {
        $req->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'You are logged out of your account. Bye :(']);
    }
}
