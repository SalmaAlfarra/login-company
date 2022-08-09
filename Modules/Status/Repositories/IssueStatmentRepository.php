<?php

namespace Modules\Status\Repositories;

use Modules\Status\Entities\IssueStatment;

class IssueStatmentRepository
{

    public function getIssueStatmentById($id)
    {
        return IssueStatment::query()->findOrFail($id);
    }

    public function getIssueStatments()
    {
        return IssueStatment::all();
    }

    public function delete($id)
    {
        return IssueStatment::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return IssueStatment::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(IssueStatment::query()->findOrFail($id)->update($data));
    }
}
