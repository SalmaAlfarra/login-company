<?php

namespace Modules\Places\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Yajra\DataTables\Facades\DataTables;
use Modules\Places\Entities\PoliceOffice;
use Illuminate\Contracts\Support\Renderable;
use Modules\Places\Http\Requests\PoliceOffice\CreatePoliceOfficeRequest;

class PoliceOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
        $data = PoliceOffice::select([
            'id',
            'name',
            'adderss',
        ]);
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('action', function ($row) {
        $btn = ' <a href="' . route('police-office.edit', [$row->id]) . '" title="edit" class="dropdown-item"
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
            class="dropdown-item deletepolice-office"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-trash-2 font-small-4 mr-50">
                <polyline points="3 6 5 6 21 6"></polyline>
                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                <line x1="10" y1="11" x2="10" y2="17"></line>
                <line x1="14" y1="11" x2="14" y2="17"></line>
            </svg></a>';

        return $btn;
        })
        ->rawColumns(['police-office', 'action'])
        ->make(true);
        }
        return view('places::police-office.view-list');
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
