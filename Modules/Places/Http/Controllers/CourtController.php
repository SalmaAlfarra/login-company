<?php

namespace Modules\Places\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Places\Entities\Court;
use Modules\Places\Http\Requests\Court\CreateCourtRequest;

class CourtController extends Controller
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
        return view('places::court.create');

        /* $courts = Court::all();

        return view(
            'places::court.create',
            compact(
                'courts'
            )
        ); */
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreateCourtRequest $request)
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
       /*  $data = $request->validated();
        $image = $data['image'];
        $imageName = Carbon::now()->format('Y_m_d_h_i')  .  '.' . $image->getClientOriginalExtension();
        $image->storeAs('/courts', $imageName, ['disk' => 'public']);

        $data['image'] = 'courts/' . $imageName;

        $add = Court::create($data);*/
        if (!$add) {
            return $this->response(
                'error'
            );
        }

        return $this->response(
            'added',
            route('places::court.create')
        );
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $court = Court::findOrFail($id);
        return view('places::show',compact('court'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $court = Court::findOrFail($id);
        return view('places::edit',compact('court'));
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
        'name'    => 'required|min:3|max:255',
        'phone'   => 'required',
        'adderss' => 'required|max:255',
        ]);

        $court = Court::find($id);

        $edit = $court->update([
        'name'    => $request->name,
        'phone'   => $request->phone,
        'adderss' => $request->adderss,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Court::destroy($id);
    }
}
