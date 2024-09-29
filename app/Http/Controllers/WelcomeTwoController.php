<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWelcomeTwoRequest;
use App\Http\Requests\UpdateWelcomeTwoRequest;
use App\Models\WelcomeTwo;

class WelcomeTwoController extends Controller
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
        return view('admin.welcometwo.welcome-two-list',
        [
            'welcometwos' => WelcomeTwo::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWelcomeTwoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWelcomeTwoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WelcomeTwo  $cow_at_home
     * @return \Illuminate\Http\Response
     */
    public function show(WelcomeTwo $cow_at_home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WelcomeTwo  $cow_at_home
     * @return \Illuminate\Http\Response
     */
    public function edit(WelcomeTwo $cow_at_home)
    {
        // dd($cow_at_home);
        //
        return view('admin.welcometwo.welcome-two-form', 
        ['cow_at_home' => $cow_at_home]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWelcomeTwoRequest  $request
     * @param  \App\Models\WelcomeTwo  $cow_at_home
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWelcomeTwoRequest $request, WelcomeTwo $cow_at_home)
    {
        $validated = $request->validated();

        $validated['description'] = $validated['description'];


        if($request->hasFile('image_one')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image_one->extension();  
    
            $type = $request->image_one->getClientMimeType();
            $size = $request->image_one->getSize();
            
            $request->image_one->move(public_path('image'), $fileName);
    
            $validated['image_one'] = $fileName;

        } 
        if($request->hasFile('image_two')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image_two->extension();  
    
            $type = $request->image_two->getClientMimeType();
            $size = $request->image_two->getSize();
            
            $request->image_two->move(public_path('image'), $fileName);
    
            $validated['image_two'] = $fileName;

        } 
        if($request->hasFile('image_three')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image_three->extension();  
    
            $type = $request->image_three->getClientMimeType();
            $size = $request->image_three->getSize();
            
            $request->image_three->move(public_path('image'), $fileName);
    
            $validated['image_three'] = $fileName;

        } 
        if($request->hasFile('image_four')) {
            $fileName = auth()->id() . '_' . time() . '.'. $request->image_four->extension();  
    
            $type = $request->image_four->getClientMimeType();
            $size = $request->image_four->getSize();
            
            $request->image_four->move(public_path('image'), $fileName);
    
            $validated['image_four'] = $fileName;

        } 
        $cow_at_home->update($validated);

        return redirect()->route('cow-at-home.edit', ['cow_at_home' => 1])->with('success', 'Successfully updated!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WelcomeTwo  $cow_at_home
     * @return \Illuminate\Http\Response
     */
    public function destroy(WelcomeTwo $cow_at_home)
    {
        //
    }
}
