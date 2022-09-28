<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_create_a_product()
    {
        $file = UploadedFile::fake()->image('file.png', 600, 600);

        $product = [
            'name' => 'test',
            'description' => 'description',
            'price' => 1234,
            'image' => $file,
        ];

        $response = $this->post('/api/products', $product);
        $response->assertOk();

        $createdProduct = Product::query()
            ->latest()
            ->first();

        $this->assertEquals($createdProduct->name, $product['name']);
        $this->assertEquals($createdProduct->description, $product['description']);
        $this->assertEquals($createdProduct->price, $product['price']);
        $this->assertEquals("file.png", $createdProduct->image);
    }
}
