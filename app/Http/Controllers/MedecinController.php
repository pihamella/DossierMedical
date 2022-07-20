<?php

namespace App\Http\Controllers;

use App\Models\medecin;
use App\Http\Requests\StoremedecinRequest;
use App\Http\Requests\UpdatemedecinRequest;

class MedecinController extends Controller
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
     * @param  \App\Http\Requests\StoremedecinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremedecinRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function show(medecin $medecin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function edit(medecin $medecin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemedecinRequest  $request
     * @param  \App\Models\medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemedecinRequest $request, medecin $medecin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function destroy(medecin $medecin)
    {
        //
    }
}
