<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_user_login(): void
    {
        $userData =  [
            'username' => 'sadra-Zargarii',
            'password' => 'Sadr@209111',
        ];
        
        $response = $this->post('api/auth/user/login' , $userData);

        //get jsons
        $response->assertJsonStructure(['__token__']); 
        $response->assertStatus(200);
    }
}
