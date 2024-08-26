<?php

namespace Tests\Feature\Product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductStore extends TestCase
{
    protected $token;
    protected function setUp(): void
    {
        parent::setUp();
        // Log in the user to get the token
        $loginResponse = $this->postJson('api/auth/user/login', [
            'username' => 'sadra-Zargarii',
            'password' => 'Sadr@209111',
        ]);

        // Store the token for later use
        $this->token = $loginResponse->json('__token__'); // Adjust based on your actual token key
    }

    public function test_product_store(): void
    {
        parent::setUp();
        $data = [
            'name' => 'proc_1',
            'status' => 1,
            'price' => 52000,
            'details' => 'proc_1_details',
            'color' => 'red',
            'is_sale' => 54000,
            'count' => 1212,
        ];
        // Send the request to store the product with the token in the authorization header
        $response = $this->postJson('api/product/store', $data,
         ['Authorization' => 'Bearer ' . $this->token,]);
        $response->assertStatus(201);
    }
}
