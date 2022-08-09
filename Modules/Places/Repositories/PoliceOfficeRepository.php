<?php

namespace Modules\Places\Repositories;

use Modules\Places\Entities\PoliceOffice;

class PoliceOfficeRepository
{

    public function getPoliceOfficeById($id)
    {
        return PoliceOffice::query()->findOrFail($id);
    }

    public function getPoliceOffices()
    {
        return PoliceOffice::all();
    }

    public function delete($id)
    {
        return PoliceOffice::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return PoliceOffice::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(PoliceOffice::query()->findOrFail($id)->update($data));
    }
}
