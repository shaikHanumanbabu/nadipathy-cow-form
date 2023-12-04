<?php

namespace App\Http\Controllers;

use App\Models\PressNew;
use Illuminate\Http\Request;

class PressNewController extends Controller
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
        // dd('kkksss');
        return view('admin.press-news.press-news-list', [
            'press_news' => PressNew::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.press-news.press-news-form');
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
        


        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach($files as $key =>  $file)
            {
                // dd($file);
                $extension = $file->getClientOriginalExtension();
                $filename = time().'-'.$key."-".date('his')."-".".".$extension;
                $file->move(public_path('press-news'), $filename);
                

                PressNew::create(['image' => $filename]);
                
            }

        }


        return redirect()->route('p-news.index')->with('success', 'Press News added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PressNew  $pressNew
     * @return \Illuminate\Http\Response
     */
    public function show(PressNew $pressNew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PressNew  $pressNew
     * @return \Illuminate\Http\Response
     */
    public function edit(PressNew $p_news)
    {
        return view('admin.press-news.press-news-form', [
            'press_news' => $p_news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PressNew  $pressNew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PressNew $p_news)
    {
        $validated = $request->validate([
            'image' => 'required',
        ]);
        if($request->hasFile('image')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image->extension();  
    
            $type = $request->image->getClientMimeType();
            $size = $request->image->getSize();
            
            $request->image->move(public_path('press-news'), $fileName);
    
            $validated['image'] = $fileName;
        }

        $p_news->update($validated);

        return redirect()->route('p-news.index')->with('success', 'Press News added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PressNew  $pressNew
     * @return \Illuminate\Http\Response
     */
    public function destroy(PressNew $p_news)
    {
        $p_news->delete();
        return redirect()->back()->with('success', 'Deleted successfully.');
    }
}
