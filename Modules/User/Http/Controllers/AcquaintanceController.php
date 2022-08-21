<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Places\Entities\City;
use Illuminate\Routing\Controller;
use Modules\User\Entities\Customer;
use Modules\User\Entities\Acquaintance;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Contracts\Support\Renderable;

class AcquaintanceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
         if ($request->ajax()) {
         $data =Acquaintance::select([
         'id',
         'name',
         'identification_number',
         ]);
         return DataTables::of($data)
         ->addIndexColumn()
         ->addColumn('action', function ($row) {
         $btn = ' <a href="' . route('acquaintance.edit', [$row->id]) . '" title="edit" class="dropdown-item"
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
         ->rawColumns(['acquaintance','action'])
         ->make(true);
         }
         return view('user::acquaintance.view-list');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $acquaintances = Acquaintance::all();

        return view(
            'user::acquaintance.create',
            [
                'city'  => City::all(),
                'customer'  => Customer::all(),
                'acqua' => $acquaintances,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        /* dd($request); */
        $request->validate([
            'first_name' => 'required|min:3|max:255',
            'father_name' => 'required|min:3|max:255',
            'grandfather_name' => 'required|min:3|max:255',
            'family_name' => 'required|min:3|max:255',
            'identification_number' => 'required|numeric',
            'relationship' => 'required|min:3|max:255',
            'address' => 'required|min:3|max:255',
            'phone' => 'required|numeric',
            'city_id' => 'required',
            'customer_id' => 'required'
        ]);

        $add = Acquaintance::create([
            'first_name' => $request->first_name,
            'father_name' => $request->father_name,
            'grandfather_name' => $request->grandfather_name,
            'family_name' => $request->family_name,
            'identification_number' => $request->identification_number,
            'relationship' => $request->relationship,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        return redirect()->route('patron.create');

        /* if (!$add) {
            return $this->response(
                'error'
            );
        }

        return $this->response(
            'added',
            route('user::acquaintance.create')
        ); */
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
        $acquaintance = Acquaintance::findOrFail($id);
        return view('user::edit', [
            'acquaintance' => $acquaintance,
            'city' => City::all(),

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
