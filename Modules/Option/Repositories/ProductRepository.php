<?php

namespace Modules\Option\Repositories;

use Modules\Option\Entities\Product;

class ProductRepository
{

    public function getProductById($id)
    {
        return Product::query()->findOrFail($id);
    }

    public function getProducts()
    {
        return Product::all();
    }

    public function delete($id)
    {
        return Product::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Product::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Product::query()->findOrFail($id)->update($data));
    }
}
