<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
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
        return view('admin.awards.awards-list', [
            'awards' => Award::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.awards.awards-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required',
        ]);
        if($request->hasFile('image')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image->extension();  
    
            $type = $request->image->getClientMimeType();
            $size = $request->image->getSize();
            
            $request->image->move(public_path('image'), $fileName);
    
            $validated['image'] = $fileName;

        }

        Award::create($validated);
        return redirect()->route('awards.index')->with('success', 'Awards added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function show(Award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function edit(Award $award)
    {
        return view('admin.awards.awards-form', [
            'award' => $award
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Award $award)
    {
        $validated = $request->validate([
            'image' => 'nullable',
        ]);
        if($request->hasFile('image')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image->extension();  
    
            $type = $request->image->getClientMimeType();
            $size = $request->image->getSize();
            
            $request->image->move(public_path('image'), $fileName);
    
            $validated['image'] = $fileName;
        }

        $award->update($validated);
        return redirect()->route('awards.index')->with('success', 'Awards updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function destroy(Award $award)
    {
        //
        $award->delete();
        return redirect()->back()->with('success', 'Deleted successfully.');
    }
}
