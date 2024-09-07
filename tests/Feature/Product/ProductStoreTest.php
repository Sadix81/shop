<?php

namespace Tests\Feature\Product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductStoreTest extends TestCase
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
        $this->token = $loginResponse->json('__token__');
    }

    public function test_product_store_successfully(): void
    {
        parent::setUp();
        $data = [
            'name' => 'test-1',
            'status' => 1,
            'price' => 25000,
            'details' => 'test-1-detailes',
            'color' => 'black',
            // 'image' => 'test-1',
            'is_sale' => 1,
            'discount' => 15000,
            'count' => '123',
        ];

        if ($data['is_sale'] && $data['discount'] > 0) {
            $final_price = $data['price'] - $data['discount'];
            $final_price = max(0, $final_price);
        } else {
            $final_price = $data['price'];
        }
        $data['price'] = $final_price;
        

        // Send the request to store the product with the token in the authorization header
         $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->postJson('api/V1/product/store', $data);

        $response->assertStatus(201);
    }
}
