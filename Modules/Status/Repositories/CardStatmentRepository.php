<?php

namespace Modules\Status\Repositories;

use Modules\Status\Entities\CardStatment;

class CardStatmentRepository
{

    public function getCardStatmentById($id)
    {
        return CardStatment::query()->findOrFail($id);
    }

    public function getCardStatments()
    {
        return CardStatment::all();
    }

    public function delete($id)
    {
        return CardStatment::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return CardStatment::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(CardStatment::query()->findOrFail($id)->update($data));
    }
}
