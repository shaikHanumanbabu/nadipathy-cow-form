<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
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
        return view('admin.events.events-list', [
            'events' => Event::orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.events-form');
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
            'title' => 'required',
            'short_description' => 'required',
            'link' => 'required',
        ]);
        if($request->hasFile('image')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image->extension();  
    
            $type = $request->image->getClientMimeType();
            $size = $request->image->getSize();
            
            $request->image->move(public_path('image'), $fileName);
    
            $validated['image'] = $fileName;
        }

        $event = Event::create($validated);


        // if ($request->hasFile('gallery_image')) {
        //     $files = $request->file('gallery_image');
        //     foreach($files as $key =>  $file)
        //     {
        //         // dd($file);   
        //         $extension = $file->getClientOriginalExtension();
        //         $filename = time().'-'.$key."-".date('his')."-".".".$extension;
        //         $file->move(public_path('image'), $filename);
        //         $event->galleryimage()->create([
        //             'image' => $filename
        //         ]);
                
        //     }

        // }


        return redirect()->route('events.index')->with('success', 'Event added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.events.events-form', [
            'event' => $event
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'link' => 'required',
        ]);
        if($request->hasFile('image')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image->extension();  
    
            $type = $request->image->getClientMimeType();
            $size = $request->image->getSize();
            
            $request->image->move(public_path('image'), $fileName);
    
            $validated['image'] = $fileName;
        }

        $event->update($validated);


        // if ($request->hasFile('gallery_image')) {
        //     $files = $request->file('gallery_image');
        //     foreach($files as $key =>  $file)
        //     {
        //         // dd($file);   
        //         $extension = $file->getClientOriginalExtension();
        //         $filename = time().'-'.$key."-".date('his')."-".".".$extension;
        //         $file->move(public_path('image'), $filename);
        //         $event->galleryimage()->create([
        //             'image' => $filename
        //         ]);
                
        //     }

        // }


        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}
