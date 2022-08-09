<?php

namespace Modules\Attachment\Repositories;

use Modules\Attachment\Entities\Plan;

class PlanRepository
{

    public function getPlanById($id)
    {
        return Plan::query()->findOrFail($id);
    }

    public function getPlans()
    {
        return Plan::all();
    }

    public function delete($id)
    {
        return Plan::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Plan::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Plan::query()->findOrFail($id)->update($data));
    }
}
