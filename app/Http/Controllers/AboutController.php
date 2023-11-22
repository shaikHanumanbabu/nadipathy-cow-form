<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.about-list', [
            'abouts' => About::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.about-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'creator_link' => 'required',
            'system_link' => 'required',
        ]);

        if($request->hasFile('image_one')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image_one->extension();  
    
            $type = $request->image_one->getClientMimeType();
            $size = $request->image_one->getSize();
            
            $request->image_one->move(public_path('image'), $fileName);
    
            $validated['image_one'] = $fileName;

        } else {
            $validated['image_one'] = 'dummy.png';

        }
        if($request->hasFile('image_two')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image_two->extension();  
    
            $type = $request->image_two->getClientMimeType();
            $size = $request->image_two->getSize();
            
            $request->image_two->move(public_path('image'), $fileName);
    
            $validated['image_two'] = $fileName;

        } else {
            $validated['image_two'] = 'dummy.png';

        }
        if($request->hasFile('image_three')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image_three->extension();  
    
            $type = $request->image_three->getClientMimeType();
            $size = $request->image_three->getSize();
            
            $request->image_three->move(public_path('image'), $fileName);
    
            $validated['image_three'] = $fileName;

        } else {
            $validated['image_three'] = 'dummy.png';

        }
        if($request->hasFile('image_four')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image_four->extension();  
    
            $type = $request->image_four->getClientMimeType();
            $size = $request->image_four->getSize();
            
            $request->image_four->move(public_path('image'), $fileName);
    
            $validated['image_four'] = $fileName;

        } else {
            $validated['image_four'] = 'dummy.png';

        }

        About::create($validated);

        return redirect()->route('about.index')->with('success', 'About added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.about.about-form', [
            'about' => $about
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        // dd($request->all());
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'creator_link' => 'required',
            'system_link' => 'required',
        ]);

        if($request->hasFile('image_one')) {
            $fileName = auth()->id() . '_' . uniqid() . '.'. $request->image_one->extension();  
    
            // $type = $request->image_one->getClientMimeType();
            // $size = $request->image_one->getSize();
            
            $request->image_one->move(public_path('image'), $fileName);
    
            $validated['image_one'] = $fileName;

        } 
        if($request->hasFile('image_two')) {
            $fileName = auth()->id() . '_' . uniqid() . '.'. $request->image_two->extension();  
    
            // $type = $request->image_two->getClientMimeType();
            // $size = $request->image_two->getSize();
            
            $request->image_two->move(public_path('image'), $fileName);
    
            $validated['image_two'] = $fileName;

        } 
        if($request->hasFile('image_three')) {
            $fileName = auth()->id() . '_' . uniqid() . '.'. $request->image_three->extension();  
    
            // $type = $request->image_three->getClientMimeType();
            // $size = $request->image_three->getSize();
            
            $request->image_three->move(public_path('image'), $fileName);
    
            $validated['image_three'] = $fileName;

        } 
        if($request->hasFile('image_four')) {
            $fileName = auth()->id() . '_' . uniqid() . '.'. $request->image_four->extension();  
    
            // $type = $request->image_four->getClientMimeType();
            // $size = $request->image_four->getSize();
            
            $request->image_four->move(public_path('image'), $fileName);
    
            $validated['image_four'] = $fileName;

        } 

        // dd($validated);
        // About::create($validated);

        $about->update($validated);

        return redirect()->route('about.edit', ['about' => $about->id])->with('success', 'About added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
        $about->delete();
        return redirect()->back()->with('success', 'Deleted successfully.');
    }
}
