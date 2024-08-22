<?php

namespace App\Http\Controllers\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\Auth\AuthRepository;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $authRepo;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepo = $authRepository;
    }

    public function register(RegisterRequest $request){
        $error = $this->authRepo->register($request);
        if ($error === null) {
            return response()->json(['message' =>  __('auth.user.register.success', ['fullname' => $request->fullname])], 201);
        }
        return response()->json(['message' => __('auth.user.register.failed', ['fullname' => $request->fullname])], 500);
    }

    public function login(LoginRequest $request){
        $accessToken = $this->authRepo->login($request);
        if ($accessToken) {
            return response()->json(['message' => __('auth.login.success'), '__token__' => $accessToken], 200);
        }
        return response()->json(['message' => __('auth.login.failed')], 500);
    }

    public function logout(){ 
        $error = $this->authRepo->logout();
        if (! $error) {
            return response()->json(['message' => __('auth.logout.success')], 200);
        }

        return response()->json(['message' => __('auth.logout.failed')], 500);
    }

    public function getUser()
    {
        $user = Auth::user();
        if ($user) {
            return response()->json($user, 200); // Return user data with a 200 status
        }
        
        return response()->json(['message' => 'User not authenticated'], 401); // Handle unauthenticated case
    }
}
