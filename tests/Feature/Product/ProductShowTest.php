<?php

namespace Tests\Feature\Product;

use App\Models\Product\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductShowTest extends TestCase
{
    protected $token;
    public function setUp(): void
    {
        parent::setUp();
        $loginResponse = $this->postJson('api/auth/user/login', [
            'username' => 'sadra-Zargarii',
            'password' => 'Sadr@209111',
        ]);
        $this->token = $loginResponse->json('__token__');
    }
    public function test_product_show(): void
    {
        $product = Product::latest()->first();
        $this->assertNotNull($product);

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->get('api/product/show/' . $product->id);

        $response->assertStatus(200);
    }
}
