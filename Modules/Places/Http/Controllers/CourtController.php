<?php

namespace Modules\Places\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Places\Entities\Court;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Contracts\Support\Renderable;

class CourtController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    { {
            if ($request->ajax()) {
                $data = Court::select([
                    'id',
                    'name',
                ]);
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $btn = ' <a href="' . route('court.edit', [$row->id]) . '" title="edit" class="dropdown-item"
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
                    ->rawColumns(['court', 'action'])
                    ->make(true);
            }

            return view('places::court.view-list');
        }
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
    public function store(Request $request)
    {
        /* dd($request); */
        $request->validate([
            'name'    => 'required|min:3|max:255',
            'address' => 'required|max:255',
            'phone'   => 'required',
        ]);

        $add = Court::create([
            'name'    => $request->name,
            'phone'   => $request->phone,
            'address' => $request->adderss,
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
        return view('places::show', compact('court'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $court = Court::findOrFail($id);
        return view('places::edit', compact('court'));
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
