<?php

namespace Modules\User\Repositories;

use Modules\User\Entities\User;

class UserRepository
{

    public function getUserById($id)
    {
        return User::query()->findOrFail($id);
    }

    public function getUsers()
    {
        return User::all();
    }

    public function delete($id)
    {
        return User::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return User::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(User::query()->findOrFail($id)->update($data));
    }
}
