<?php

namespace Modules\Option\Repositories;

use Modules\Option\Entities\LegalProcedur;

class LegalProcedurRepository
{

    public function getLegalProcedurById($id)
    {
        return LegalProcedur::query()->findOrFail($id);
    }

    public function getLegalProcedurs()
    {
        return LegalProcedur::all();
    }

    public function delete($id)
    {
        return LegalProcedur::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return LegalProcedur::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(LegalProcedur::query()->findOrFail($id)->update($data));
    }
}
