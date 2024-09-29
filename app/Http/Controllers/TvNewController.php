<?php

namespace App\Http\Controllers;

use App\Models\TvNew;
use Illuminate\Http\Request;

class TvNewController extends Controller
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
        return view('admin.tv-news.tv-news-list',[
            'tv_news' => TvNew::orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tv-news.tv-news-form');
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
            'link' => 'required',
        ]);        

        TvNew::create($validated);

        return redirect()->route('tv-news.index')->with('success', 'Tv News added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TvNew  $tv_news
     * @return \Illuminate\Http\Response
     */
    public function show(TvNew $tv_news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TvNew  $tv_news
     * @return \Illuminate\Http\Response
     */
    public function edit(TvNew $tv_news)
    {
        return view('admin.tv-news.tv-news-form', [
            'tv_news' => $tv_news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TvNew  $tv_news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TvNew $tv_news)
    {
        $validated = $request->validate([
            'link' => 'required',
        ]);        

        $tv_news->update($validated);

        return redirect()->route('tv-news.index')->with('success', 'Tv News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TvNew  $tv_news
     * @return \Illuminate\Http\Response
     */
    public function destroy(TvNew $tv_news)
    {
        // dd($tv_news);
        $tv_news->delete();
        return redirect()->back()->with('success', 'Deleted successfully.');
    }
}
