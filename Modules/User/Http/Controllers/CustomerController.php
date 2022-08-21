<?php

namespace Modules\User\Http\Controllers;

use App\Imports\CustomersImport;
use Illuminate\Http\Request;
use Modules\Places\Entities\Bank;
use Modules\Places\Entities\City;
use Illuminate\Routing\Controller;
use Modules\Places\Entities\Court;
use Modules\Places\Entities\Branch;
use Modules\User\Entities\Customer;
use Modules\Option\Entities\Product;
use Yajra\DataTables\Facades\DataTables;
use Modules\Places\Entities\PoliceOffice;
use Illuminate\Contracts\Support\Renderable;
use Maatwebsite\Excel\Facades\Excel;
use Modules\User\Http\Requests\Customer\CreateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Customer::select([
                'id',
                'name',
                'identification_number'
            ]);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = ' <a href="' . route('customer.edit', [$row->id]) . '" title="edit" class="dropdown-item"
                style="display: contents">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-archive font-small-4 mr-50">
                    <polyline points="21 8 21 21 3 21 3 8">
                    </polyline>
                    <rect x="1" y="3" width="22" height="5"></rect>
                    <line x1="10" y1="12" x2="14" y2="12"></line>
                </svg></a>';

                    $btn = $btn . '<a href="javascript:void(0)" data-id="' . $row->id . '" title="delete" style="display: contents"
                class="dropdown-item deletecustomer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-trash-2 font-small-4 mr-50">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg></a>';

                    return $btn;
                })
                ->rawColumns(['customer', 'action'])
                ->make(true);
        }
        return view('user::customer.view-list');
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

        $add = Customer::create([
            'name'                               =>  $request->name,
            'identification_number'              =>  $request->identification_number,
            'government_service_portal_password' =>  $request->government_service_portal_password,
            'date_of_birth'                      =>  $request->date_of_birth,
            'job_title'                          =>  $request->job_title,
            'job_type'                           =>  $request->job_type,
            'employer'                           =>  $request->employer,
            'address'                            =>  $request->address,
            'phone'                              =>  $request->phone,
            'city_id'                            =>  $request->city_id,
            'partner_name'                       =>  $request->partner_first_name,
            'partner_family_address'             =>  $request->partner_family_address,
            'partner_employer'                   =>  $request->partner_employer,
            'partner_identification_number'      =>  $request->partner_identification_number,
            'partner_family_name'                =>  $request->partner_family_name,
            'partner_grandfather_name'           =>  $request->partner_grandfather_name,
            'partner_father_name'                =>  $request->partner_father_name,
            'partner_first_name'                 =>  $request->partner_first_name,
            'court_id'                           =>  $request->court_id,
            'police_office_id'                   =>  $request->police_office_id,
            'branch_id'                          =>  $request->branch_id,
            'identification_issuance_date'       =>  $request->identification_issuance_date
        ]);

        return redirect()->route('acquaintance.create');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('user::show', [
            'customer' => $customer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $city    = City::all();
        $court   = Court::all();
        $branch  = Branch::all();
        $police  = PoliceOffice::all();
        $bank    = Bank::all();
        $customer = Customer::find($id);


        return view('user::edit', [
            'customer' => $customer,
            'city'     => $city,
            'court'    => $court,
            'branch'   => $branch,
            'police'   => $police,
            'bank'     => $bank,
            'customer' => $customer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        /*  $request->validate([
            'first_name'                         =>  'required|min:3|max:255',
            'father_name'                        =>  'required|min:3|max:255',
            'grandfather_name'                   =>  'required|min:3|max:255',
            'family_name'                        =>  'required|min:3|max:255',
            'identification_number'              =>  'required|max:255',
            'government_service_portal_password' =>  'required|max:255',
            'date_of_birth'                      =>  'required|max:255',
            'job_title'                          =>  'required',
            'job_type'                           =>  'required',
            'employer'                           =>  'required',
            'address'                            =>  'required|min:3|max:255',
            'phone'                              =>  'required|numeric',
            'city_id'                            =>  'required',
            'partner_family_address'             =>  'required',
            'partner_employer'                   =>  'required',
            'partner_identification_number'      =>  'required',
            'partner_family_name'                =>  'required',
            'partner_grandfather_name'           =>  'required',
            'partner_father_name'                =>  'required',
            'partner_first_name'                 =>  'required',
            'court_id'                           =>  'required',
            'police_office_id'                   =>  'required',
        ]);
 */
        $customer = Customer::find($id);


        $edit = $customer->update([
            'name' => $request->first_name,
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
    }

    public function excelfile(Request $request)
    {
        return view('user::customer.file');
    }
    public function uploadexcel(Request $request)
    {
        Excel::import(new CustomersImport, $request->file('excelfile'));
        return view('status::report.home');
    }
}
