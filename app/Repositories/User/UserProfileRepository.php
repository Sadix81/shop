<?php

namespace App\Repositories\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserProfileRepository implements UserProfileRepositoryInterface
{
    public function index(){
        $user = Auth::id();
        $data = User::where('id' , $user)->first();
        return $data;
    }

    public function update($user , $request){
        $user_id =Auth::id();
        $user->update([
            'user_id' =>  $request->user_id ? $user_id : $user_id,
            'fullname' => $request->fullname ? $request->fullname : $user->fullname,
            'username' => $request->username ? $request->username : $user->username,
            'mobile' => $request->mobile ? $request->mobile : $user->mobile,
            'password' => password_hash($request->password, PASSWORD_DEFAULT) ? $request->password : $user->password,
            'avatar' => $request->avatar ? $request->avatar : $user->avatar,
            'email' => $request->email ? $request->email : $user->email, 
        ]);
    }
}
