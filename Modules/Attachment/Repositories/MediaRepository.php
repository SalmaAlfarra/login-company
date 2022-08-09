<?php

namespace Modules\Attachment\Repositories;

use Modules\Attachment\Entities\Media;

class MediaRepository
{

    public function getMediaById($id)
    {
        return Media::query()->findOrFail($id);
    }

    public function getMedias()
    {
        return Media::all();
    }

    public function delete($id)
    {
        return Media::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Media::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Media::query()->findOrFail($id)->update($data));
    }
}
