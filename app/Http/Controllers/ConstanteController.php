<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConstanteRequest;
use App\Http\Requests\UpdateConstanteRequest;
use App\Models\Constante;

class ConstanteController extends Controller
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
     * @param  \App\Http\Requests\StoreConstanteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConstanteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Constante  $constante
     * @return \Illuminate\Http\Response
     */
    public function show(Constante $constante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Constante  $constante
     * @return \Illuminate\Http\Response
     */
    public function edit(Constante $constante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConstanteRequest  $request
     * @param  \App\Models\Constante  $constante
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConstanteRequest $request, Constante $constante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Constante  $constante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Constante $constante)
    {
        //
    }
}
