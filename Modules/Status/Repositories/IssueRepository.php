<?php

namespace Modules\Status\Repositories;

use Modules\Status\Entities\Issue;

class IssueRepository
{

    public function getIssueById($id)
    {
        return Issue::query()->findOrFail($id);
    }

    public function getIssues()
    {
        return Issue::all();
    }

    public function delete($id)
    {
        return Issue::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Issue::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Issue::query()->findOrFail($id)->update($data));
    }
}
