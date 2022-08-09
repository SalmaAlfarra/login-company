<?php

namespace Modules\User\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Entities\Customer;
use Modules\User\Http\Requests\Customer\CreateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('user::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::customer.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreateCustomerRequest $request)
    {
        $data = $request->validated();

        $image = $data['image'];
        $imageName = Carbon::now()->format('Y_m_d_h_i')  .  '.' . $image->getClientOriginalExtension();
        $image->storeAs('/customers', $imageName, ['disk' => 'public']);

        $data['image'] = 'customers/' . $imageName;

        $add = Customer::create($data);
        if (!$add) {
            return $this->response(
                'error'
            );
        }

        return $this->response(
            'added',
            route('user::customer.create')
        );
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('user::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
