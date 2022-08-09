<?php

namespace Modules\Places\Repositories;

use Modules\Places\Entities\Branch;

class BranchRepository
{

    public function getBranchById($id)
    {
        return Branch::query()->findOrFail($id);
    }

    public function getBranchs()
    {
        return Branch::all();
    }

    public function delete($id)
    {
        return Branch::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Branch::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Branch::query()->findOrFail($id)->update($data));
    }
}
