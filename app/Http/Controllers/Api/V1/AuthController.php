<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\User\LoginRequest;
use App\Http\Requests\Api\V1\User\StoreRequest;
use http\Client\Curl\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(StoreRequest $request)
    {
        $data = $request->validated();
        $user = \App\Models\User::query()->create($data);
        return $user;
    }
    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        if(!Auth::attempt($data)){
            return response()->json([
                'message' => 'Invalid email or password'
            ],401);
        }
        $user = Auth::user();
        $user->tokens()->delete();
        return \response()->json([
            'token' => $user->createToken("Token of user" . $user->name)->plainTextToken
        ]);
    }
    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();
        return \response()->json([
            'message' =>  'Token removed'
        ]);
    }
}
