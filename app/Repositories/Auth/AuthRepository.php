<?php

namespace App\Repositories\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthRepository implements AuthRepositoryInterface
{
    public function register($request)
    {
        try {
            User::create([
                'fullname' => $request->fullname,
                'username' => $request->username,
                'mobile' => $request->mobile,
                'password' => password_hash($request->password, PASSWORD_DEFAULT),
                'avatar' => $request->avatar,
                'email' => $request->email,
            ]);
        } catch (\Throwable $th) {
            Log::error('Registration error: ' . $th->getMessage());
            return $th;
        }
    }

    public function login($request)
    {
        $user = User::where('username', $request->username)->first();

        if ($user && password_verify($request->password, $user->password)) {

            $token = $user->createToken('__token__')->accessToken;

            return $token;
        }

        return null;
    }

    public function logout()
    {
        try {
            $user = Auth::user();
            $user->token()->revoke();
                } catch (\Throwable $th) {
            return $th;
        }
    }

}
