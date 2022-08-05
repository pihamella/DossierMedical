<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use App\Http\Requests\StorePrescriptionRequest;
use App\Http\Requests\UpdatePrescriptionRequest;
use App\Models\Patient;
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
        {
            return view('prescription.index', [
                'prescription' => Prescription::all()->map(function($prescription) {
                    return [
                        'nom_patient' => Patient::where('id', $prescription->patient_id)->first()->nom_patient,
                        'prenom_patient' => Patient::where('id', $prescription->patient_id)->first()->prenom_patient,
                        'nom_de_formation' => $prescription->nom_de_formation,
                        'date_prescrition' => $prescription->date_prescrition,
                        'note' => $prescription->note,
                        'id' => $prescription->id,
                    ];
                }),
                
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('prescription.create', [
        'patients' => Patient::all()
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePrescriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom_de_formation' => 'required|string',
            'date_prescrition' => 'required|string',
            'note' => 'required|string',
            'medecin' => 'required|string',
            'patient' => 'required|string',
            
        ]);
        
         Prescription::create([
            'nom_de_formation' => $validatedData['nom_de_formation'],
            'date_prescrition' => $validatedData['date_prescrition'],
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
        return view('prescription.edit', compact('prescription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrescriptionRequest  $request
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prescription $prescription)
    {
        $validatedData = $request->validate([
            'nom_de_formation' => 'required|string',
            'date_prescrition' => 'required|string',
            'Note' => 'required|string',
            'medecin' => 'required|string',
            'patient' => 'required|string',

        ]);

        $prescription->update([
            'nom_de_formation' => $validatedData['nom_de_formation'],
            'date_prescrition' => $validatedData['date_prescrition'],
            'Note' => $validatedData['Note'],
            'medecin_id' => $validatedData['medecin'],
            'patient_id' => $validatedData['patient'],
        ]);

        if ($prescription) {
            return redirect('/prescription')->with('message', 'modification effectuée avec succès.');
        } else {
            return redirect(route("prescription.edit", $prescription))->with('message', 'Erreur lors de la modification veuillez rééssayer svp.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prescription $prescription)
    {
        $prescription->delete();
        
        return redirect('/prescription')->with('message', 'Suppression effectuée avec succès.');
    
    }
}
