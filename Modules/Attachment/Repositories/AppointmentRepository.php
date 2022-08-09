<?php

namespace Modules\Attachment\Repositories;

use Modules\Attachment\Entities\Appointment;

class AppointmentRepository
{

    public function getAppointmentById($id)
    {
        return Appointment::query()->findOrFail($id);
    }

    public function getAppointments()
    {
        return Appointment::all();
    }

    public function delete($id)
    {
        return Appointment::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Appointment::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Appointment::query()->findOrFail($id)->update($data));
    }
}
