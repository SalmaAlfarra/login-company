<?php

namespace Modules\Places\Repositories;

use Modules\Places\Entities\Bank;

class BankRepository
{

    public function getBankById($id)
    {
        return Bank::query()->findOrFail($id);
    }

    public function getBanks()
    {
        return Bank::all();
    }

    public function delete($id)
    {
        return Bank::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Bank::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Bank::query()->findOrFail($id)->update($data));
    }
}
