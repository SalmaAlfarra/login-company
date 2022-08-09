<?php

namespace Modules\User\Repositories;

use Modules\User\Entities\Customer;

class CustomerRepository
{

    public function getCustomerById($id)
    {
        return Customer::query()->findOrFail($id);
    }

    public function getCustomers()
    {
        return Customer::all();
    }

    public function delete($id)
    {
        return Customer::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Customer::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Customer::query()->findOrFail($id)->update($data));
    }
}
