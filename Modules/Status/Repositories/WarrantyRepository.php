<?php

namespace Modules\Status\Repositories;

use Modules\Status\Entities\Warranty;

class WarrantyRepository
{

    public function getWarrantyById($id)
    {
        return Warranty::query()->findOrFail($id);
    }

    public function getWarrantys()
    {
        return Warranty::all();
    }

    public function delete($id)
    {
        return Warranty::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Warranty::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Warranty::query()->findOrFail($id)->update($data));
    }
}
