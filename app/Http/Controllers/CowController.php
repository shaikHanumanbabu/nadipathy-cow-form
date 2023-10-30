<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCowRequest;
use App\Models\Breed;
use App\Models\Cow;
use App\Models\SubCategories;
use Illuminate\Http\Request;

class CowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cows.cow-list', [
            'cows' => Cow::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cows.cow-form',[
            'breeds' => Breed::all(),
            'sub_categories' => SubCategories::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCowRequest $request)
    {
        $validated = $request->validated();

        if($request->hasFile('main_image')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->main_image->extension();  
    
            $type = $request->main_image->getClientMimeType();
            $size = $request->main_image->getSize();
            
            $request->main_image->move(public_path('image'), $fileName);
    
            $validated['main_image'] = $fileName;

        } else {
            $validated['main_image'] = 'dummy.png';

        }

        
        Cow::create($validated);
        return redirect()->route('cows.index')->with('success', 'Cow added successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cow  $cow
     * @return \Illuminate\Http\Response
     */
    public function show(Cow $cow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cow  $cow
     * @return \Illuminate\Http\Response
     */
    public function edit(Cow $cow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cow  $cow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cow $cow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cow  $cow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cow $cow)
    {
        $cow->delete();
        return redirect()->route('cows.index')->with('success', 'Cow deleted successfully.');


    }
}
