<?php

namespace App\Http\Controllers;

use App\Models\Traitement;
use App\Http\Requests\StoreTraitementRequest;
use App\Http\Requests\UpdateTraitementRequest;

class TraitementController extends Controller
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
     * @param  \App\Http\Requests\StoreTraitementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTraitementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Traitement  $traitement
     * @return \Illuminate\Http\Response
     */
    public function show(Traitement $traitement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Traitement  $traitement
     * @return \Illuminate\Http\Response
     */
    public function edit(Traitement $traitement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTraitementRequest  $request
     * @param  \App\Models\Traitement  $traitement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTraitementRequest $request, Traitement $traitement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Traitement  $traitement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Traitement $traitement)
    {
        //
    }
}
