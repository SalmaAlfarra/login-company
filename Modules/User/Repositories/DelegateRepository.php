<?php

namespace Modules\User\Repositories;

use Modules\User\Entities\Delegate;

class DelegateRepository
{

    public function getDelegateById($id)
    {
        return Delegate::query()->findOrFail($id);
    }

    public function getDelegates()
    {
        return Delegate::all();
    }

    public function delete($id)
    {
        return Delegate::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Delegate::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Delegate::query()->findOrFail($id)->update($data));
    }
}
