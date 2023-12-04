<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubCategoryRequest;
use App\Models\Breed;
use App\Models\SubCategories;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.subcategories.subcategories-list', [
            'subcategories' => SubCategories::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subcategories.subcategories-form', [
            'breeds' => Breed::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategoryRequest $request)
    {
        
        $validated = $request->validated();

        if($request->hasFile('image')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image->extension();  
    
            $type = $request->image->getClientMimeType();
            $size = $request->image->getSize();
            
            $request->image->move(public_path('image'), $fileName);
    
            $validated['subcategory_image'] = $fileName;

        }

        // dd($validated);
        SubCategories::create($validated);
        return redirect()->route('subcategories.index')->with('success', 'SubCategory added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategories  $subCategories
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategories $subCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategories  $subCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategories $subcategory)
    {
        return view('admin.subcategories.subcategories-form', [
            'subcategorie' => $subcategory,
            'breeds' => Breed::all()


        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategories  $subCategories
     * @return \Illuminate\Http\Response
     */
    public function update(SubCategoryRequest $request, SubCategories $subcategory)
    {
        $validated = $request->validated();

        if($request->hasFile('image')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image->extension();  
    
            $type = $request->image->getClientMimeType();
            $size = $request->image->getSize();
            
            $request->image->move(public_path('image'), $fileName);
    
            $validated['subcategory_image'] = $fileName;

        }

        $subcategory->update($validated);
        return redirect()->route('subcategories.index')->with('success', 'SubCategory updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategories  $subCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategories $subcategory)
    {
        // dd($subcategory);
        $subcategory->delete();
        return redirect()->back()->with('success', 'Deleted successfully.');
    }
}
