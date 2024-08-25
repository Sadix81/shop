<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    public function test_Register_User(): void
    {
        $userData = [
            'fullname' => 'sadra-Zargari',
            'username' => 'sadra-Zargarii',
            'password' => 'Sadr@209111',
            'mobile' => '09117322373',
        ];
    
        $response = $this->postJson('api/auth/user/register', $userData);

    
        $response->assertStatus(201);// using 302 if our user which we created redirect to another page :)

      
    }
}
