<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Contracts\Pagination\Paginator;

class ProductService
{
    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProducts($categoryId, $name, $price): Paginator
    {
        return $this->productRepository->getProducts($categoryId, $name ?? 'asc', $price ?? 'asc');
    }

    public function createProduct($name, $description, $price, $image): void
    {
        $imageName = $image->getClientOriginalName();
        $image->move(public_path() . '/uploads/', $imageName);

        $this->productRepository->createProduct([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'image' => $imageName,
        ]);
    }
}
