<?php

namespace Modules\Status\Repositories;

use Modules\Status\Entities\Bill;

class BillRepository
{

    public function getBillById($id)
    {
        return Bill::query()->findOrFail($id);
    }

    public function getBills()
    {
        return Bill::all();
    }

    public function delete($id)
    {
        return Bill::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Bill::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Bill::query()->findOrFail($id)->update($data));
    }
}
