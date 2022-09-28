<?php

namespace App\Repositories\Interfaces;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface ProductRepositoryInterface
{
    /**
     * Paginate products query listing
     * @param int|null $categoryId
     * @param string $name
     * @param string $price
     * @return Paginator
     */
    public function getProducts(?int $categoryId, string $name, string $price): Paginator;

    /**
     * Create product
     * @param array $data
     * @return Model
     */
    public function createProduct(array $data): Model;
}
