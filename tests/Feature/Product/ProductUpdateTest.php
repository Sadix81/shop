<?php

namespace Tests\Feature\Product;

use App\Models\Product\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductUpdateTest extends TestCase
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

    public function test_product_update()
    {
        $product = Product::latest()->first();
        $this->assertNotNull($product);
        $data = [
            'name' => 'proc_2',
            'status' => 0,
            'price' => 2222222,
            'details' => 'proc_2_details',
            'color' => 'black',
            'is_sale' => 222222,
            'count' => 2222,
        ];
        
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->put('api/product/update/' . $product->id, $data);

        $response->assertStatus(200);
    }
}
