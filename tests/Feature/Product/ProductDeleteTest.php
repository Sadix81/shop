<?php

namespace Tests\Feature\Product;

use App\Models\Product\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductDeleteTest extends TestCase
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

    public function test_product_delete()
    {
        $product = Product::latest()->first();
        $this->assertNotNull($product);
    
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->delete('api/product/delete/' . $product->id);
    
        $response->assertStatus(200);
        $this->assertDatabaseMissing('products', ['id' => $product->id]);
        $this->assertDatabaseCount('products', 3);
    }
}
