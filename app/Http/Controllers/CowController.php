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

        if(isset($validated['show_in_explore']) && $validated['show_in_explore'] == 'on') {
            $validated['show_in_explore'] = 1;
        }
        if($request->hasFile('main_image')) {
            $fileName = auth()->id() . '_' . uniqid() . '.'. $request->main_image->extension();  
    
            $type = $request->main_image->getClientMimeType();
            $size = $request->main_image->getSize();
            
            $request->main_image->move(public_path('image'), $fileName);
    
            $validated['main_image'] = $fileName;

        } 

        if($request->hasFile('bg_image')) {
            $fileName = auth()->id() . '_' . uniqid() . '.'. $request->bg_image->extension();  
    
            $type = $request->bg_image->getClientMimeType();
            $size = $request->bg_image->getSize();
            
            $request->bg_image->move(public_path('image'), $fileName);
    
            $validated['bg_image'] = $fileName;

        } 

        
        $cow = Cow::create($validated);
        

        if ($request->hasFile('image_name')) {
            $files = $request->file('image_name');
            foreach($files as $key =>  $file)
            {
                // dd($file);
                $extension = $file->getClientOriginalExtension();
                $filename = uniqid().'-'.$key."-".date('his')."-".".".$extension;
                $file->move(public_path('image'), $filename);
                $cow->galleryimage()->create([
                    'image_name' => $filename
                ]);
                
            }

        }

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
        
        return view('admin.cows.cow-form',[
            'breeds' => Breed::all(),
            'sub_categories' => SubCategories::all(),
            'cow' => $cow
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cow  $cow
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCowRequest $request, Cow $cow)
    {
        $validated = $request->validated();

        if(isset($validated['show_in_explore']) && $validated['show_in_explore'] == 'on') {
            $validated['show_in_explore'] = 1;
        }
        
        // dd($request->file('main_image'));
        if($request->hasFile('main_image')) {
            $fileName = auth()->id() . '_' . uniqid() . '.'. $request->main_image->extension();  
    
            $type = $request->main_image->getClientMimeType();
            $size = $request->main_image->getSize();
            
            $request->main_image->move(public_path('image'), $fileName);
    
            $validated['main_image'] = $fileName;

        } 

        if($request->hasFile('bg_image')) {
            $fileName = auth()->id() . '_' . uniqid() . '.'. $request->bg_image->extension();  
    
            $type = $request->bg_image->getClientMimeType();
            $size = $request->bg_image->getSize();
            
            $request->bg_image->move(public_path('image'), $fileName);
    
            $validated['bg_image'] = $fileName;

        } 

        
        $cow->update($validated);
        

        if ($request->hasFile('image_name')) {
            $files = $request->file('image_name');
            foreach($files as $key =>  $file)
            {
                // dd($file);
                $extension = $file->getClientOriginalExtension();
                $filename = uniqid().'-'.$key."-".date('his')."-".".".$extension;
                $file->move(public_path('image'), $filename);
                $cow->galleryimage()->create([
                    'image_name' => $filename
                ]);
                
            }

        }

        return redirect()->route('cows.index')->with('success', 'Cow updated successfully.');
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
