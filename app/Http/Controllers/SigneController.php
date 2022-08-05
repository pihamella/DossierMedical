<?php

namespace App\Http\Controllers;

use App\Models\Signe;
use App\Models\Secretaire;

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
                        'nom_patient' => Patient::where('id', $signe->Patient_id)->first()->nom_patient,
                        'prenom_patient' => Patient::where('id', $signe->Patient_id)->first()->prenom_patient,
                        'etat_general' => $signe->etat_general,
                        'etat_de_Concience' => $signe->etat_de_Concience,
                        'etat_de_conjontive' => $signe->etat_de_conjontive,
                        'OMI' => $signe->OMI,
                        'etat_physique' => $signe->etat_physique,
                        'diagnostic' => $signe->diagnostic,
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
   
    public function store(Request $request)
    {
        // dd($request);
        $validateData = $request->validate([
            'etat_general' => 'required|string',
            'etat_de_Concience' => 'required|string',
            'etat_de_conjontive' => 'required|string',
            'OMI' => 'required|string',
            'etat_physique' => 'required|string',
            'diagnostic' => 'required|string',
            'patient' => 'required|string',
            'secretaire' => 'required|string',
        ]);

        
        
        $signe = Signe::create([
            'etat_general' => $validateData['etat_general'],
            'etat_de_Concience' => $request['etat_de_Concience'],
            'etat_de_conjontive' => $request['etat_de_conjontive'],
            'OMI' => $request['OMI'],
            'etat_physique' => $request['etat_physique'],
            'diagnostic' => $request['diagnostic'],
            'Patient_id' => $request['patient'],
            'secretaireId' =>  Auth()->user()->role === 'secretaire' ? Secretaire::where('id', Auth()->user()->secretaire_id)->first()->id : null
        ]);

        
        
        if ($signe) {
            return redirect('/signe/creer')->with('message', 'Vous avez ajouté un nouveau signe avec succès.');
        }else {
            return redirect('/signe/creer')->with('message', 'Erreur lors de la création du nouveau signe  veuillez rééssayer svp.');
        }
        // dd($signe);

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
            'etat_general' => 'required|string',
            'etat_de_Concience' => 'required|string',
            'etat_de_conjontive' => 'required|string',
            'OMI' => 'required|string',
            'etat_physique' => 'required|string',
            'diagnostic' => 'required|string',
            'secretaire' => 'required|string',
            'patient' => 'required|string',
        ]);
        $signe->update([
            'etat_general' => $validatedData['etat_general'],
            'etat_de_Concience' => $validatedData['etat_de_Concience'],
            'etat_de_conjontive' => $validatedData['etat_de_conjontive'],
            'OMI' => $validatedData['OMI'],
            'etat_physique' => $validatedData['etat_physique'],
            'diagnostic' => $validatedData['diagnostic'],
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
