<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWelcomeOneRequest;
use App\Http\Requests\UpdateWelcomeOneRequest;
use App\Models\WelcomeOne;

class WelcomeOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.welcomeone.welcome-one-list',
        [
            'welcomeones' => WelcomeOne::all()
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
     * @param  \App\Http\Requests\StoreWelcomeOneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWelcomeOneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WelcomeOne  $welcomeOne
     * @return \Illuminate\Http\Response
     */
    public function show(WelcomeOne $welcomeOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WelcomeOne  $welcomeOne
     * @return \Illuminate\Http\Response
     */
    public function edit(WelcomeOne $welcomeOne)
    {
        return view('admin.welcomeone.welcome-one-form', 
        ['welcomeOne' => $welcomeOne]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWelcomeOneRequest  $request
     * @param  \App\Models\WelcomeOne  $welcomeOne
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWelcomeOneRequest $request, WelcomeOne $welcomeOne)
    {
        $validated = $request->validated();

        $validated['description'] = htmlentities($validated['description']);

        
        $welcomeOne->update($validated);

        return redirect()->route('welcome_ones.edit', ['welcome_one' => 1])->with('success', 'Successfully updated!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WelcomeOne  $welcomeOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(WelcomeOne $welcomeOne)
    {
        //
    }
}
