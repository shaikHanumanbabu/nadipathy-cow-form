<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarouselRequest;
use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
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
        //
        $carousels = Carousel::all();
        return view('admin.carousel', [
            'carousels' => $carousels
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.carousel.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarouselRequest $request)
    {
        
        $validated = $request->validated();

        if($request->hasFile('image')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image->extension();  
    
            $type = $request->image->getClientMimeType();
            $size = $request->image->getSize();
            
            $request->image->move(public_path('image'), $fileName);
    
            $validated['image'] = $fileName;

        }
        $carousel = Carousel::create($validated);

        return redirect()->route('carousel.index')->with('success', 'Carousel added successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        return view('admin.carousel.create', [
            'carousel' => $carousel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarouselRequest $request, Carousel $carousel)
    {
        $validated = $request->validated();

        if($request->hasFile('image')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image->extension();  
    
            $type = $request->image->getClientMimeType();
            $size = $request->image->getSize();
            
            $request->image->move(public_path('image'), $fileName);
    
            $validated['image'] = $fileName;

        }

        $carousel->update($validated);

        return redirect()->route('carousel.index')->with('success', 'Carousel updated successfully.');;


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carousel $carousel)
    {
       $carousel->delete();
       return redirect()->back()->with('success', 'Deleted successfully.');
    }
}
