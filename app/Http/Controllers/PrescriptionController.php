<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use App\Http\Requests\StorePrescriptionRequest;
use App\Http\Requests\UpdatePrescriptionRequest;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
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
        return view('prescription');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePrescriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Resquest $request)
    {
        $validatedData = $request->validate([
            'DatePrescrition' => 'required|string',
            'Note' => 'required|string',
            'medecin' => 'required|string',
            'patient' => 'required|string',
            
        ]);
        $prescription = Prescription::create([
            'DatePrescrition' => $validatedData['DatePrescrition'],
            'Note' => $validatedData['Note'],
            'medecin_id' => $validatedData['medecin'],
            'patient_id' => $validatedData['patient'],
        ]);
        if ($prescription) {
            return redirect('/prescription/creer')->with('message', 'Vous avez ajouté une nouvelle prescription avec succès.');
        }else {
            return redirect('/prescription/creer')->with('message', 'Erreur lors de la création de la nouvelle prescription  veuillez rééssayer svp.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function show(Prescription $prescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function edit(Prescription $prescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrescriptionRequest  $request
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrescriptionRequest $request, Prescription $prescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prescription $prescription)
    {
        //
    }
}
