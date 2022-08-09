<?php

namespace Modules\User\Repositories;

use Modules\User\Entities\Acquaintance;

class AcquaintanceRepository
{

    public function getAcquaintanceById($id)
    {
        return Acquaintance::query()->findOrFail($id);
    }

    public function getAcquaintances()
    {
        return Acquaintance::all();
    }

    public function delete($id)
    {
        return Acquaintance::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Acquaintance::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Acquaintance::query()->findOrFail($id)->update($data));
    }
}
