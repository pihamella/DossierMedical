<?php

namespace App\Http\Controllers;

use App\Models\Analyse;
use App\Http\Requests\StoreAnalyseRequest;
use App\Http\Requests\UpdateAnalyseRequest;

class AnalyseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreAnalyseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnalyseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Analyse  $analyse
     * @return \Illuminate\Http\Response
     */
    public function show(Analyse $analyse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Analyse  $analyse
     * @return \Illuminate\Http\Response
     */
    public function edit(Analyse $analyse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnalyseRequest  $request
     * @param  \App\Models\Analyse  $analyse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnalyseRequest $request, Analyse $analyse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Analyse  $analyse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Analyse $analyse)
    {
        //
    }
}
