<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AuthController extends Controller
{
    public function register(Request $request){
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;

        return response()->json($success,200);
    }
    public function login(Request $request){
        $user = User::where('email',$request->email)->first();
        
        $user['token'] = $user->createToken($user->email)->accessToken;
        return response()->json($user,200);
    }
}
