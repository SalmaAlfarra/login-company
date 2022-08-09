<?php

namespace Modules\Attachment\Repositories;

use Modules\Attachment\Entities\Folder;

class FolderRepository
{

    public function getFolderById($id)
    {
        return Folder::query()->findOrFail($id);
    }

    public function getFolders()
    {
        return Folder::all();
    }

    public function delete($id)
    {
        return Folder::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Folder::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Folder::query()->findOrFail($id)->update($data));
    }
}
