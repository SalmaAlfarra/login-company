<?php

namespace Modules\Status\Repositories;

use Modules\Status\Entities\AccountStatment;

class AccountStatmentRepository
{

    public function getAccountStatmentById($id)
    {
        return AccountStatment::query()->findOrFail($id);
    }

    public function getAccountStatments()
    {
        return AccountStatment::all();
    }

    public function delete($id)
    {
        return AccountStatment::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return AccountStatment::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(AccountStatment::query()->findOrFail($id)->update($data));
    }
}
