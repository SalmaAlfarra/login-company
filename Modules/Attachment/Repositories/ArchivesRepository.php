<?php

namespace Modules\Attachment\Repositories;

use Modules\Attachment\Entities\Archives;

class AppointmentRepository
{

    public function getArchivesById($id)
    {
        return Archives::query()->findOrFail($id);
    }

    public function getArchives()
    {
        return Archives::all();
    }

    public function delete($id)
    {
        return Archives::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Archives::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Archives::query()->findOrFail($id)->update($data));
    }
}
