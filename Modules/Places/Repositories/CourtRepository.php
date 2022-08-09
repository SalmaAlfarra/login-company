<?php

namespace Modules\Places\Repositories;

use Modules\Places\Entities\Court;

class CourtRepository
{

    public function getCourtById($id)
    {
        return Court::query()->findOrFail($id);
    }

    public function getCourts()
    {
        return Court::all();
    }

    public function delete($id)
    {
        return Court::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Court::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Court::query()->findOrFail($id)->update($data));
    }
}
