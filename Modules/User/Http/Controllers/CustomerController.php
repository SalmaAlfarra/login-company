<?php

namespace Modules\User\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Places\Entities\Bank;
use Modules\Places\Entities\City;
use Illuminate\Routing\Controller;
use Modules\Places\Entities\Court;
use Modules\Places\Entities\Branch;
use Modules\User\Entities\Customer;
use Modules\Option\Entities\Product;
use Modules\Places\Entities\PoliceOffice;
use Illuminate\Contracts\Support\Renderable;
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
        $city   =  City::all();
        $court  =  Court::all();
        $branch =  Branch::all();
        $police =  PoliceOffice::all();
        $bank   =  Bank::all();

        return view('user::customer.create', [
            'city'   => $city,
            'court'  => $court,
            'branch' => $branch,
            'police' => $police,
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
        /* dd($request); */
        /* bbbb  */
        $add = Customer::create([
            'first_name' => $request->first_name,
            'father_name' => $request->father_name,
            'grandfather_name' => $request->grandfather_name,
            'family_name' => $request->family_name,
            'identification_number' => $request->identification_number,
            'government_service_portal_password' => $request->government_service_portal_password,
            'date_of_birth' => $request->date_of_birth,
            'job_title' => $request->job_title,
            'job_type' => $request->job_type,
            'employer' => $request->employer,
            'address' => $request->address,
            'phone' => $request->phone,
            'city_id' => $request->city_id,
            'partner_family_address' => $request->partner_family_address,
            'partner_employer' => $request->partner_employer,
            'partner_identification_number' => $request->partner_identification_number,
            'partner_family_name' => $request->partner_family_name,
            'partner_grandfather_name' => $request->partner_grandfather_name,
            'partner_father_name' => $request->partner_father_name,
            'partner_first_name' => $request->partner_first_name,
            'court_id' => $request->court_id,
            'police_office_id' => $request->police_office_id,
            'branch_id' => $request->branch_id,
            'identification_issuance_date' => $request->identification_issuance_date
        ]);
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
        $request->validate([
            'first_name' => 'required|min:3|max:255',
            'father_name' => 'required|min:3|max:255',
            'grandfather_name' => 'required|min:3|max:255',
            'family_name' => 'required|min:3|max:255',
            'identification_number' => 'required|max:255',
            'government_service_portal_password' => 'required|max:255',
            'date_of_birth' => 'required|max:255',
            'job_title' => 'required|max:255',
            'job_type' => 'required|min:3|max:255',
            'employer' => 'required|min:3|max:255',
            'address' => 'required|min:3|max:255',
            'phone' => 'required|numeric',
            'city_id' => 'required',
            'partner_family_address' => 'required',
            'partner_employer' => 'required',
            'partner_identification_number' => 'required',
            'partner_family_name' => 'required',
            'partner_grandfather_name' => 'required',
            'partner_father_name' => 'required',
            'partner_first_name' => 'required',
            'court_id' => 'required',
            'police_office_id' => 'required',
        ]);

        $product = Product::find($id);


        $edit = $product->update([
            'first_name' => $request->first_name,
            'father_name' => $request->father_name,
            'grandfather_name' => $request->grandfather_name,
            'family_name' => $request->family_name,
            'identification_number' => $request->identification_number,
            'government_service_portal_password' => $request->government_service_portal_password,
            'date_of_birth' => $request->date_of_birth,
            'job_title' => $request->job_title,
            'job_type' => $request->job_type,
            'employer' => $request->employer,
            'address' => $request->address,
            'phone' => $request->phone,
            'city_id' => $request->city_id,
            'partner_family_address' => $request->partner_family_address,
            'partner_employer' => $request->partner_employer,
            'partner_identification_number' => $request->partner_identification_number,
            'partner_family_name' => $request->partner_family_name,
            'partner_grandfather_name' => $request->partner_grandfather_name,
            'partner_father_name' => $request->partner_father_name,
            'partner_first_name' => $request->partner_first_name,
            'court_id' => $request->court_id,
            'police_office_id' => $request->police_office_id,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Product::destroy($id);
    }
}
