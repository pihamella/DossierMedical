<?php

namespace App\Http\Controllers;

use App\Models\Signe;
use App\Http\Requests\StoreSigneRequest;
use App\Http\Requests\UpdateSigneRequest;

class SigneController extends Controller
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
     * @param  \App\Http\Requests\StoreSigneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSigneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Signe  $signe
     * @return \Illuminate\Http\Response
     */
    public function show(Signe $signe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Signe  $signe
     * @return \Illuminate\Http\Response
     */
    public function edit(Signe $signe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSigneRequest  $request
     * @param  \App\Models\Signe  $signe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSigneRequest $request, Signe $signe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Signe  $signe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Signe $signe)
    {
        //
    }
}
