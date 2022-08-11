<?php

namespace Modules\User\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Places\Entities\City;
use Modules\User\Entities\Patron;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\User\Http\Requests\Patron\CreatePatronRequest;

class PatronController extends Controller
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

         return view('user::patron.create',[
            'city' => City::all(),
         ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreatePatronRequest $request)
    {
        $request->validate([
        'first_name' => 'required|min:3|max:255',
        'father_name' => 'required|min:3|max:255',
        'grandfather_name' => 'required|min:3|max:255',
        'family_name' => 'required|min:3|max:255',
        'identification_number' => 'required|numeric',
        'government_service_portal_password' => 'required|min:3|max:255',
        'salary' => 'required|min:3|max:255',
        'bank_account_number' => 'required|numeric',
        'job_type'=>'required',
        'job_title'=>'required',
        'address'=>'required',
        'phone'=>'required',
        'city_id'=>'required',
        ]);

        /* $data = $request->validated(); */
        $add = Patron::create([
        'first_name' => $request -> first_name,
        'father_name' => $request -> father_name,
        'grandfather_name' => $request -> grandfather_name,
        'family_name' => $request -> family_name,
        'identification_number' => $request -> identification_number,
        'government_service_portal_password' => $request -> government_service_portal_password,
        'salary' => $request -> salary,
        'bank_account_number' => $request -> bank_account_number,
        'job_type' => $request -> job_type,
        'job_title' => $request -> job_title,
        'address' => $request -> address,
        'phone' => $request -> phone,
        'city_id' => $request -> city_id,
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
