<?php

namespace Modules\User\Repositories;

use Modules\User\Entities\Supplier;

class SupplierRepository
{

    public function getSupplierById($id)
    {
        return Supplier::query()->findOrFail($id);
    }

    public function getSuppliers()
    {
        return Supplier::all();
    }

    public function delete($id)
    {
        return Supplier::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Supplier::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Supplier::query()->findOrFail($id)->update($data));
    }
}
