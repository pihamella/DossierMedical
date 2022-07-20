<?php

namespace App\Http\Controllers;

use App\Models\DossierMedical;
use App\Http\Requests\StoreDossierMedicalRequest;
use App\Http\Requests\UpdateDossierMedicalRequest;

class DossierMedicalController extends Controller
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
     * @param  \App\Http\Requests\StoreDossierMedicalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDossierMedicalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DossierMedical  $dossierMedical
     * @return \Illuminate\Http\Response
     */
    public function show(DossierMedical $dossierMedical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DossierMedical  $dossierMedical
     * @return \Illuminate\Http\Response
     */
    public function edit(DossierMedical $dossierMedical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDossierMedicalRequest  $request
     * @param  \App\Models\DossierMedical  $dossierMedical
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDossierMedicalRequest $request, DossierMedical $dossierMedical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DossierMedical  $dossierMedical
     * @return \Illuminate\Http\Response
     */
    public function destroy(DossierMedical $dossierMedical)
    {
        //
    }
}
