<?php

namespace Modules\Option\Repositories;

use Modules\Option\Entities\Currency;

class CurrencyRepository
{

    public function getCurrencyById($id)
    {
        return Currency::query()->findOrFail($id);
    }

    public function getCurrencys()
    {
        return Currency::all();
    }

    public function delete($id)
    {
        return Currency::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Currency::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Currency::query()->findOrFail($id)->update($data));
    }
}
