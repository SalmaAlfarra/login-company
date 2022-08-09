<?php

namespace Modules\Option\Repositories;

use Modules\Option\Entities\PaymentMechanism;

class PaymentMechanismRepository
{

    public function getPaymentMechanismById($id)
    {
        return PaymentMechanism::query()->findOrFail($id);
    }

    public function getPaymentMechanisms()
    {
        return PaymentMechanism::all();
    }

    public function delete($id)
    {
        return PaymentMechanism::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return PaymentMechanism::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(PaymentMechanism::query()->findOrFail($id)->update($data));
    }
}
