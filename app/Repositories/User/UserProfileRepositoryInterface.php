<?php

namespace App\Repositories\User;

interface UserProfileRepositoryInterface{
    
    public function index();

    public function update($user , $request);
}
