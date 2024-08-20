<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    public function profile();

    public function updateProfile($user , $request);}
