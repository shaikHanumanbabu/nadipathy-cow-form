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
     * @param  \App\Models\WelcomeTwo  $welcomeTwo
     * @return \Illuminate\Http\Response
     */
    public function show(WelcomeTwo $welcomeTwo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WelcomeTwo  $welcomeTwo
     * @return \Illuminate\Http\Response
     */
    public function edit(WelcomeTwo $welcomeTwo)
    {
        //
        return view('admin.welcometwo.welcome-two-form', 
        ['welcomeTwo' => $welcomeTwo]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWelcomeTwoRequest  $request
     * @param  \App\Models\WelcomeTwo  $welcomeTwo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWelcomeTwoRequest $request, WelcomeTwo $welcomeTwo)
    {
        $validated = $request->validated();

        $validated['description'] = htmlentities($validated['description']);

        // dd($validated);
        $welcomeTwo->update($validated);

        return redirect()->route('welcome_twos.edit', ['welcome_two' => 1])->with('success', 'Successfully updated!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WelcomeTwo  $welcomeTwo
     * @return \Illuminate\Http\Response
     */
    public function destroy(WelcomeTwo $welcomeTwo)
    {
        //
    }
}
