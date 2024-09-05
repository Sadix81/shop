<?php

namespace App\Http\Controllers\V1\User\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Profile\UpdateUserProfileRequest;
use App\Models\User;
use App\Repositories\User\UserProfileRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileUpdateController extends Controller
{
    private $profileRepo;

    public function __construct(UserProfileRepository $userProfileRepository)
    {
        $this->profileRepo = $userProfileRepository;
    }

    public function index(){
        return $this->profileRepo->index();
    }


    public function update(User $user , UpdateUserProfileRequest $request){
        $user = Auth::user();
        if(! $user){
            return '.عدم دسترسی';
        }

        $error = $this->profileRepo->update($user , $request);
        if ($error === null){
            return response()->json(['message' => __('profile.update,success')] , 200);
        }
        return response()->json(['message' => __('profile.update,failed')] , 500);
    }
}
