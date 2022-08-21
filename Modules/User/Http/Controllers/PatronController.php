<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Places\Entities\Bank;
use Modules\Places\Entities\City;
use Modules\User\Entities\Patron;
use Illuminate\Routing\Controller;
use Modules\Places\Entities\Branch;
use Modules\User\Entities\Customer;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Contracts\Support\Renderable;

class PatronController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
         if ($request->ajax()) {

                $data =Patron::select([
                'id',
                'name',
                'identification_number',
                ]);
                return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                $btn = ' <a href="' . route('patron.edit', [$row->id]) . '" title="edit" class="dropdown-item"
                    style="display: contents">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-archive font-small-4 mr-50">
                        <polyline points="21 8 21 21 3 21 3 8">
                        </polyline>
                        <rect x="1" y="3" width="22" height="5"></rect>
                        <line x1="10" y1="12" x2="14" y2="12"></line>
                    </svg></a>';

                $btn = $btn .'<a href="javascript:void(0)" data-id="' . $row->id . '" title="delete" style="display: contents"
                    class="dropdown-item deletecourt"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-trash-2 font-small-4 mr-50">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10" y1="11" x2="10" y2="17"></line>
                        <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></a>';

                return $btn;
                })
                ->rawColumns(['product','action'])
                ->make(true);
         }

        return view('user::patron.view-details');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $city   =  City::all();
        $branch =  Branch::all();
        $bank   =  Bank::all();
        return view('user::patron.create', [
            'customer'  => Customer::all(),
            'city'   => $city,
            'branch' => $branch,
            'bank'   => $bank
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3|max:255',
            'father_name' => 'required|min:3|max:255',
            'grandfather_name' => 'required|min:3|max:255',
            'family_name' => 'required|min:3|max:255',
            'identification_number' => 'required|numeric',
            'government_service_portal_password' => 'required|min:3|max:255',
            'salary' => 'required',
            'bank_account_number' => 'required|numeric',
            'job_type' => 'required',
            'job_title' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'city_id' => 'required',
            'customer_id' => 'required'
        ]);

        /* $data = $request->validated(); */
        $add = Patron::create([
            'first_name' => $request->first_name,
            'father_name' => $request->father_name,
            'grandfather_name' => $request->grandfather_name,
            'family_name' => $request->family_name,
            'identification_number' => $request->identification_number,
            'government_service_portal_password' => $request->government_service_portal_password,
            'salary' => $request->salary,
            'bank_account_number' => $request->bank_account_number,
            'job_type' => $request->job_type,
            'job_title' => $request->job_title,
            'address' => $request->address,
            'phone' => $request->phone,
            'city_id' => $request->city_id,
        ]);
        return view('status::report.home');
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
