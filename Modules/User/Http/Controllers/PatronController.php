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
        $city = City::all();
         return view('user::patron.create',[
            'city'=>$city,

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
        'relationship' => 'required|min:3|max:255',
        'address' => 'required|min:3|max:255',
        'phone' => 'required|numeric',
        'city_id'=>'required'
        ]);

        /* $data = $request->validated(); */
        $add = Patron::create([
        'first_name' => $request -> first_name,
        'father_name' => $request -> father_name,
        'grandfather_name' => $request -> grandfather_name,
        'family_name' => $request -> family_name,
        'identification_number' => $request -> identification_number,
        'relationship' => $request -> relationship,
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
