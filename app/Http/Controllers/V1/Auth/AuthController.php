<?php

namespace App\Http\Controllers\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\Auth\AuthRepository;
use Illuminate\Http\Request;

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
}
