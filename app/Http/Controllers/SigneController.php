<?php

namespace App\Http\Controllers;

use App\Models\Signe;
use App\Models\Secretaire;
use App\Http\Requests\StoreSigneRequest;
use App\Http\Requests\UpdateSigneRequest;
use App\Models\Patient;
use Illuminate\Http\Request;


class SigneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            return view('signe.index', [
                'signe' => Signe::all()->map(function($signe) {
                    return [
                        'nom_patient' => Patient::where('id', $signe->patient_id)->first()->nom_patient,
                        'prenom_patient' => Patient::where('id', $signe->patient_id)->first()->prenom_patient,
                        'Etat_general' => $signe->Etat_general,
                        'Etat_de_Concience' => $signe->Etat_de_Concience,
                        'Etat_de_conjontive' => $signe->Etat_de_conjontive,
                        'OMI' => $signe->OMI,
                        'Etat_physique' => $signe->Etat_physique,
                        'Diagnostic' => $signe->Diagnostic,
                        'id' => $signe->id,
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
        return view('signe.create', [
            'patients' => Patient::all()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSigneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Etat_general' => 'required|string',
            'Etat_de_Concience' => 'required|string',
            'Etat_de_conjontive' => 'required|string',
            'OMI' => 'required|string',
            'Etat_physique' => 'required|string',
            'Diagnostic' => 'required|string',
            'patient' => 'required|string',
        ]);

        $signe = Signe::create([
            'Etat_general' => $validatedData['Etat_general'],
            'Etat_de_Concience' => $validatedData['Etat_de_Concience'],
            'Etat_de_conjontive' => $validatedData['Etat_de_conjontive'],
            'OMI' => $validatedData['OMI'],
            'Etat_physique' => $validatedData['Etat_physique'],
            'Diagnostic' => $validatedData['Diagnostic'],
            'patient_id' => $validatedData['patient'],
            'secretaireId' =>  Auth()->user()->role === 'secretaire' ? Secretaire::where('id', Auth()->user()->secretaire_id)->first()->id : null
        ]);
        if ($signe) {
            return redirect('/signe/creer')->with('message', 'Vous avez ajouté un nouveau signe avec succès.');
        }else {
            return redirect('/signe/creer')->with('message', 'Erreur lors de la création du nouveau signe  veuillez rééssayer svp.');
        }
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
        {
            return view('signe.edit', compact('signe'));
        }
    
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
        $validatedData = $request->validate([
            'Etat_general' => 'required|string',
            'Etat_de_Concience' => 'required|string',
            'Etat_de_conjontive' => 'required|string',
            'OMI' => 'required|string',
            'Etat_physique' => 'required|string',
            'Diagnostic' => 'required|string',
            'secretaire' => 'required|string',
            'patient' => 'required|string',
        ]);
        $signe->update([
            'Etat_general' => $validatedData['Etat_general'],
            'Etat_de_Concience' => $validatedData['Etat_de_Concience'],
            'Etat_de_conjontive' => $validatedData['Etat_de_conjontive'],
            'OMI' => $validatedData['OMI'],
            'Etat_physique' => $validatedData['Etat_physique'],
            'Diagnostic' => $validatedData['Diagnostic'],
            'patient_id' => $validatedData['patient'],
            'secretaire_id' => $validatedData['secretaire'],
        ]);

        if ($signe) {
            return redirect('/signe')->with('message', 'modification effectuée avec succès.');
        } else {
            return redirect(route("signe.edit", $signe))->with('message', 'Erreur lors de la modification veuillez rééssayer svp.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Signe  $signe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Signe $signe)
    {
        $signe->delete();
        
        return redirect('/signe')->with('message', 'Suppression effectuée avec succès.');
    
    }
}
