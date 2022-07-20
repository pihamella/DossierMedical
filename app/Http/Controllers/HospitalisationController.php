<?php

namespace App\Http\Controllers;

use App\Models\Hospitalisation;
use App\Http\Requests\StoreHospitalisationRequest;
use App\Http\Requests\UpdateHospitalisationRequest;

class HospitalisationController extends Controller
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
     * @param  \App\Http\Requests\StoreHospitalisationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHospitalisationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hospitalisation  $hospitalisation
     * @return \Illuminate\Http\Response
     */
    public function show(Hospitalisation $hospitalisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospitalisation  $hospitalisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospitalisation $hospitalisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHospitalisationRequest  $request
     * @param  \App\Models\Hospitalisation  $hospitalisation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHospitalisationRequest $request, Hospitalisation $hospitalisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospitalisation  $hospitalisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospitalisation $hospitalisation)
    {
        //
    }
}
