<?php

namespace App\Repositories\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
            return $th;
        }
    }

    public function login($request)
    {
        $user = User::where('username', $request->username)->first();

        if ($user && password_verify($request->password, $user->password)) {
            // $settings = Setting::latest()->first();
            // if ($settings->twofactor && $user->twofactor) {
            //     if (! $request->has('confirm_code') || ($request->has('confirm_code') && ! $request->confirm_code)) {
            //         return false;
            //     }
            // }

            // if ($request->has('confirm_code') && $request->confirm_code) {
            //     $expiredAt = Carbon::parse($user->confirm_code_expired_at);
            //     if ($expiredAt->isPast()) {
            //         return false;
            //     }
            //     if (! Hash::check($request->confirm_code, $user->confirm_code)) {
            //         return false;
            //     }
            // }
            // $user->update(['confirm_code' => null, 'confirm_code_expired_at', null]);

            $token = $user->createToken('__token__')->accessToken;

            return $token;
        }

        return null;
    }

    public function logout()
    {
        try {
            $user = Auth::User();
            $user->token()->revoke();
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
