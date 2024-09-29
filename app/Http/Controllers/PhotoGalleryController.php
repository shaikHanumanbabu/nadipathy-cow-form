<?php

namespace App\Http\Controllers;

use App\Models\photoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PhotoGalleryController extends Controller
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
        // $photoGallery = photoGallery::with('galleryimage')->get();
        return view('admin.photo-gallery.photo-gallery-list', [
            'photoGalleries' => photoGallery::orderBy('id', 'desc')->get(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photo-gallery.photo-gallery-form');
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
            'title' => 'required',
        ]);

        $validated['title'] = Str::slug($request->get('title'));

        if($request->hasFile('image')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image->extension();  
    
            $type = $request->image->getClientMimeType();
            $size = $request->image->getSize();
            
            $request->image->move(public_path('image'), $fileName);
    
            $validated['image'] = $fileName;

        } else {
            $validated['image'] = 'dummy.png';

        }


        
        // dd($validated);
        $photoGallery = photoGallery::create($validated);
        // dd($photoGallery);

        if ($request->hasFile('gallery_image')) {
            $files = $request->file('gallery_image');
            foreach($files as $key =>  $file)
            {
                // dd($file);
                $extension = $file->getClientOriginalExtension();
                $filename = time().'-'.$key."-".date('his')."-".".".$extension;
                $file->move(public_path('image'), $filename);
                $photoGallery->galleryimage()->create([
                    'image' => $filename
                ]);
                
            }

        }

        return redirect()->route('photogalleries.index')->with('success', 'Photo Gallery added successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\photoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function show(photoGallery $photoGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\photoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(photoGallery $photogallery)
    {
        return view('admin.photo-gallery.photo-gallery-form', [
            'photogallery' => $photogallery
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\photoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, photoGallery $photogallery)
    {
        $validated = $request->validate([
            'title' => 'required',
        ]);

        $validated['title'] = Str::slug($request->get('title'));

        if($request->hasFile('image')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image->extension();  
    
            $type = $request->image->getClientMimeType();
            $size = $request->image->getSize();
            
            $request->image->move(public_path('image'), $fileName);
    
            $validated['image'] = $fileName;

        } 

        $photogallery->update($validated);

        if ($request->hasFile('gallery_image')) {
            $files = $request->file('gallery_image');
            foreach($files as $key =>  $file)
            {
                // dd($file);
                $extension = $file->getClientOriginalExtension();
                $filename = time().'-'.$key."-".date('his')."-".".".$extension;
                $file->move(public_path('image'), $filename);
                $photogallery->galleryimage()->create([
                    'image' => $filename
                ]);
                
            }

        }

        return redirect()->route('photogalleries.index')->with('success', 'Photo Gallery updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\photoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(photoGallery $photogallery)
    {
        $photogallery->delete();
        return redirect()->back()->with('success', 'Deleted successfully.');
    }
}
