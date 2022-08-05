<?php

namespace App\Http\Controllers;

use App\Models\Analyse;
use App\Http\Requests\StoreAnalyseRequest;
use App\Http\Requests\UpdateAnalyseRequest;
use App\Models\Patient;
use App\Models\Medecin;
use Illuminate\Http\Request;

class AnalyseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            return view('analyse.index', [
                'analyse' => Analyse::all()->map(function($analyse) {
                    return [
                        'nom_patient' => Patient::where('id', $analyse->patient_id)->first()->nom_patient,
                        'prenom_patient' => Patient::where('id', $analyse->patient_id)->first()->prenom_patient,
                        'nom_medecin' => Medecin::where('id', $analyse->medecin_id)->first()->nom_medecin,
                        'prenom_medecin' => Medecin::where('id', $analyse->medecin_id)->first()->prenom_medecin,
                        'nom_analyse' => $analyse->nom_analyse,
                        'déscription' => $analyse->déscription,
                        'autres' => $analyse->autres,
                        'id' => $analyse->id,
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
        return view('analyse.create', [
            'patients' => Patient::all()
        ]);
        return view('analyse.create', [
            'medecins' => Medecin::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnalyseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnalyseRequest $request)
    {
         $validatedData = $request->validate([
            'nom_patient' => 'required|string',
            'déscription' => 'required|string',
            'autres' => 'required|string',
            'patient' => 'required|string',
            'medecin' => 'required|string',
        ]);

        
        $analyse = Analyse::create([
            'nom_patient' => $validatedData['nom_patient'],
            'déscription' => $validatedData['déscription'],
            'autres' => $validatedData['autres'],
            'patient_id' => $validatedData['patient'],
            'medecin_id' => $validatedData['Medecin'],
        ]);

        if ($analyse) {
            return redirect('/analyse/creer')->with('message', 'Vous avez ajouté une nouvelle constante avec succès.');
        }else {
            return redirect('/analyse/creer')->with('message', 'Erreur lors de la création d une nouvelle constante  veuillez rééssayer svp.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Analyse  $analyse
     * @return \Illuminate\Http\Response
     */
    public function show(Analyse $analyse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Analyse  $analyse
     * @return \Illuminate\Http\Response
     */
    public function edit(Analyse $analyse)
    {
        return view('analyse.edit', compact('analyse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnalyseRequest  $request
     * @param  \App\Models\Analyse  $analyse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnalyseRequest $request, Analyse $analyse)
    {
        $validatedData = $request->validate([
            'nom_patient' => 'required|string',
            'déscription' => 'required|string',
            'autres' => 'required|string',
            'patient' => 'required|string',
            'medecin' => 'required|string',

        ]);

        $analyse->update([
            'nom_analyse' => $analyse->nom_analyse,
            'déscription' => $analyse->déscription,
            'autres' => $analyse->autres,
            'patient_id' => $validatedData['patient'],
            'medecin_id' => $validatedData['Medecin'],
            
        ]);

        if ($analyse) {
            return redirect('/analyse')->with('message', 'modification effectuée avec succès.');
        } else {
            return redirect(route("analyse.edit", $analyse))->with('message', 'Erreur lors de la modification veuillez rééssayer svp.');
        }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Analyse  $analyse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Analyse $analyse)
    {
        $analyse->delete();
        
        return redirect('/analyse')->with('message', 'Suppression effectuée avec succès.');
    }
}
