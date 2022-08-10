<?php

namespace Modules\Option\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Option\Entities\Category;
use Modules\Option\Http\Requests\Category\CreateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('option::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('option::category.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
        'name'           => 'required|min:3|max:255',
        'descreption'    => 'required',
        'category_image' => 'nullable|image',
        ]);
         $data = $request->validated();
         $image = $data['category_image'];
         $imageName = Carbon::now()->format('Y_m_d_h_i') . '.' . $image->getClientOriginalExtension();
         $image->storeAs('/categories', $imageName, ['disk' => 'public']);

         $data['image'] = 'categories/' . $imageName;

        $add = Category::create([
        'name'           =>  $request->name,
        'descreption'    =>  $request->phone,
        'category_image' =>  $imageName,
        ]);

        /* $add = Category::create($data); */
        if (!$add) {
            return $this->response(
                'error'
            );
        }

        return $this->response(
            'added',
            route('option::Category.create')
        );
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('option::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('places::edit',compact('category'));
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
        'name'           => 'required|min:3|max:255',
        'descreption'    => 'required',
        'category_image' => 'required|max:255',
        ]);

        $category = Category::find($id);

        $data = $request->validated();
        $image = $data['category_image'];
        $imageName = Carbon::now()->format('Y_m_d_h_i') . '.' . $image->getClientOriginalExtension();
        $image->storeAs('/categories', $imageName, ['disk' => 'public']);

        $data['image'] = 'categories/' . $imageName;

        $edit = $category->update([
        'name'           => $request->name,
        'descreption'    => $request->phone,
        'category_image' => $imageName,
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Category::destroy($id);
    }
}
