<?php

namespace Modules\Option\Repositories;

use Modules\Option\Entities\Order;

class OrderRepository
{

    public function getOrderById($id)
    {
        return Order::query()->findOrFail($id);
    }

    public function getOrders()
    {
        return Order::all();
    }

    public function delete($id)
    {
        return Order::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Order::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Order::query()->findOrFail($id)->update($data));
    }
}
