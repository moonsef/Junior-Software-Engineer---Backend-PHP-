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
}
