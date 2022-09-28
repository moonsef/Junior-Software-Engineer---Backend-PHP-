<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetProductRequest;
use App\Services\ProductService;
use Illuminate\Contracts\Pagination\Paginator;

class ProductController extends Controller
{

    private ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index(GetProductRequest $request): Paginator
    {
        $data = $request->validated();

        return $this->productService->getProducts(
            $data['category_id'] ?? null,
            $data['name'] ?? null,
            $data['price'] ?? null,
        );
    }
}
