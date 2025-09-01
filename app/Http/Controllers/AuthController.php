<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Http\Resources\AuthResource;

class AuthController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        $user = User::NewUser($request->validated());
        Auth::login($user);
        
        return new AuthResource($user);
    }

    public function login(LoginUserRequest $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'error' => 'Invalid credentials'
            ], 401);
        }

        return new AuthResource(Auth::user());
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function getAuthenticatedUser(Request $request)
    {
        if (!$request->user()) {
            return response()->json([
                'error' => 'Not authenticated'
            ], 401);
        }
        
        return new AuthResource($request->user());
    }
}