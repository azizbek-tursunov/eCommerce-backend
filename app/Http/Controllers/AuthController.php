<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(LoginRequest $request): JsonResponse
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Invalid credentials'],
            ]);
        }

        return response()->json([
            'token' => $user->createToken($request->email)->plainTextToken,
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        // Revoke all tokens...
    }

    public function register()
    {
        //
    }

    public function user(Request $request)
    {
        return $request->user();
    }
}
