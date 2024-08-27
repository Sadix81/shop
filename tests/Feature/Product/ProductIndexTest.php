<?php

namespace Tests\Feature\Product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductIndexTest extends TestCase
{
    protected $token;
    public function setup(): void
    {
        parent::setUp();    
        $loginResponse = $this->postJson('api/auth/user/login', [
            'username' => 'sadra-Zargarii',
            'password' => 'Sadr@209111',
        ]);
        $this->token = $loginResponse->json('__token__');
    }

    public function test_product_index(){
        parent::setup();
        $response = $this->get('api/product/index' , ['Authorization' => 'Bearer ' . $this->token,]);
        $response->assertStatus(200);
    }
}
