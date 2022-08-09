<?php

namespace Modules\Places\Repositories;

use Modules\Places\Entities\City;

class CityRepository
{

    public function getCityById($id)
    {
        return City::query()->findOrFail($id);
    }

    public function getCitys()
    {
        return City::all();
    }

    public function delete($id)
    {
        return City::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return City::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(City::query()->findOrFail($id)->update($data));
    }
}
