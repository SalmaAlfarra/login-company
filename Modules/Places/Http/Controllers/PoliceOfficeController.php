<?php

namespace Modules\Places\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Places\Entities\PoliceOffice;
use Modules\Places\Http\Requests\PoliceOffice\CreatePoliceOfficeRequest;

class PoliceOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('places::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $policeoffices = PoliceOffice::all();

        return view(
            'places::police-office.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {


        $request->validate([
        'name' => 'required|min:3|max:255',
        'phone' => 'required',
        'adderss' => 'required|max:255',
        ]);


       $add = PoliceOffice::create([
        'name' => $request->name,
        'phone' => $request->phone,
        'adderss' =>$request->adderss,
        ]);
        /* $data = $request->validated();

         $image = $data['image'];
        $imageName = Carbon::now()->format('Y_m_d_h_i')  .  '.' . $image->getClientOriginalExtension();
        $image->storeAs('/policeoffices', $imageName, ['disk' => 'public']);

        $data['image'] = 'policeoffices/' . $imageName; */

        /* $add = PoliceOffice::create($data);
        if (!$add) {
            return $this->response(
                'error'
            );
        }

        return $this->response(
            'added',
            route('places::police-office.create')
        ); */
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('places::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(PoliceOffice $policeOffice)
    {
        /* $policeoffice = PoliceOffice::findOrFail($id); */
        return view('places::police-office.edit',[

            'policeoffice'=>$policeOffice,

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
        $request->validate([
        'name' => 'required|min:3|max:255',
        'phone' => 'required',
        'adderss' => 'required|max:255',
        ]);

        $policeoffice = PoliceOffice::find($id);

        $edit = $policeoffice->update([
        'name' => $request->name,
        'phone' => $request->phone,
        'adderss' =>$request->adderss,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        PoliceOffice::destroy($id);
    }
}
