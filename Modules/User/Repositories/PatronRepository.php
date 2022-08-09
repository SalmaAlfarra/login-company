<?php

namespace Modules\User\Repositories;

use Modules\User\Entities\Patron;

class PatronRepository
{

    public function getPatronById($id)
    {
        return Patron::query()->findOrFail($id);
    }

    public function getPatrons()
    {
        return Patron::all();
    }

    public function delete($id)
    {
        return Patron::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Patron::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Patron::query()->findOrFail($id)->update($data));
    }
}
