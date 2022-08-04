<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConstanteRequest;
use App\Http\Requests\UpdateConstanteRequest;
use App\Models\Constante;
use App\Models\Secretaire;
use App\Models\Patient;
use Illuminate\Http\Request;

class ConstanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            return view('constante.index', [
                'constantes' => Constante::all()->map(function($constante) {
                    return [
                        'nom_patient' => Patient::where('id', $constante->patient_id)->first()->nom_patient,
                        'prenom_patient' => Patient::where('id', $constante->patient_id)->first()->prenom_patient,
                        'poids' => $constante->poids,
                        'temperature' => $constante->temperature,
                        'taille' => $constante->taille,
                        'tension' => $constante->tension,
                        'note' => $constante->note,
                        'id' => $constante->id,
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
        return view('constante.create', [
            'patients' => Patient::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConstanteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'poids' => 'required|string',
            'temperature' => 'required|string',
            'taille' => 'required|string',
            'tension' => 'required|string',
            'note' => 'required|string',
            'patient' => 'required|string',
        ]);

        
        $constante = Constante::create([
            'poids' => $validatedData['poids'],
            'temperature' => $validatedData['temperature'],
            'taille' => $validatedData['taille'],
            'tension' => $validatedData['tension'],
            'note' => $validatedData['note'],
            'patient_id' => $validatedData['patient'],
            'secretaireId' =>  Auth()->user()->role === 'secretaire' ? Secretaire::where('id', Auth()->user()->secretaire_id)->first()->id : null
        ]);


        if ($constante) {
            return redirect('/constante/creer')->with('message', 'Vous avez ajouté une nouvelle constante avec succès.');
        }else {
            return redirect('/constante/creer')->with('message', 'Erreur lors de la création d une nouvelle constante  veuillez rééssayer svp.');
        }
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
        return view('constante.edit', compact('constante'));
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
        $validatedData = $request->validate([
            'poids' => 'required|string',
            'temperature' => 'required|string',
            'taille' => 'required|string',
            'tension' => 'required|string',
            'note' => 'required|string',
            'secretaire' => 'required|string',
            'patient' => 'required|string',

        ]);

        $type_consultation->update([
            'poids' => $validatedData['poids'],
            'temperature' => $validatedData['temperature'],
            'taille' => $validatedData['taille'],
            'tension' => $validatedData['tension'],
            'note' => $validatedData['note'],
            'patient_id' => $validatedData['patient'],
            'secretaire_id' => $validatedData['secretaire'],
            
        ]);

        if ($constante) {
            return redirect('/constante')->with('message', 'modification effectuée avec succès.');
        } else {
            return redirect(route("constante.edit", $constante))->with('message', 'Erreur lors de la modification veuillez rééssayer svp.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Constante  $constante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Constante $constante)
    {
        $constante->delete();
        
        return redirect('/constantes')->with('message', 'Suppression effectuée avec succès.');
    
    }
}
