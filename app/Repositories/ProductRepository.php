<?php


namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

class ProductRepository implements ProductRepositoryInterface
{
    public function getProducts(?int $categoryId, string $name = 'asc', string $price = 'asc'): Paginator
    {
        return Product::query()
            ->with('categories.category.parentCategory')
            ->when($categoryId, fn($query) => $query->whereHas('categories', fn($query) => $query->where('category_id', $categoryId)))
            ->when($name, fn($query) => $query->orderBy('name', $name))
            ->when($price, fn($query) => $query->orderBy('price', $price))
            ->simplePaginate();
    }

    public function createProduct(array $data): Model
    {
        return Product::query()
            ->create($data);
    }

}
