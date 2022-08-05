<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreTraitementRequest;
use App\Http\Requests\UpdateTraitementRequest;
use App\Models\Traitement;
use App\Models\Patient;
use App\Models\Medecin;
use Illuminate\Http\Request;

class TraitementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            return view('traitement.index', [
                'traitement' => Traitement::all()->map(function($traitement) {
                    return [
                        'nom_patient' => Patient::where('id', $traitement->patient_id)->first()->nom_patient,
                        'prenom_patient' => Patient::where('id', $traitement->patient_id)->first()->prenom_patient,
                        'nom_medecin' => Medecin::where('id', $traitement->medecin_id)->first()->nom_medecin,
                        'prenom_medecin' => Medecin::where('id', $traitement->medecin_id)->first()->prenom_medecin,
                        'debut_traitement' => $traitement->debut_traitement,
                        'fin_traitement' => $traitement->fin_traitement,
                        'prix' => $traitement->prix,
                        'note' => $traitement->note,
                        'date_du_prochain_RDV' => $traitement->date_du_prochain_RDV,
                        'id' => $traitement->id,
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
        return view('traitement.create', [
            'patients' => Patient::all()
        ]);
        return view('traitement.create', [
            'medecins' => Medecin::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTraitementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTraitementRequest $request)
    {
        $validatedData = $request->validate([
            'debut_traitement' => 'required|string',
            'fin_traitement' => 'required|string',
            'prix' => 'required|string',
            'note' => 'required|string',
            'date_du_prochain_RDV' => 'required|string',
            'patient' => 'required|string',
            'medecin' => 'required|string',
        ]);
        $traitement = Traitement::create([
            'debut_traitement' => $validatedData['debut_traitement'],
            'fin_traitement' => $validatedData['fin_traitement'],
            'prix' => $validatedData['prix'],
            'note' => $validatedData['note'],
            'date_du_prochain_RDV' => $validatedData['date_du_prochain_RDV'],
            'patient_id' => $validatedData['patient'],
            'medecin_id' => $validatedData['Medecin'],

        ]);
        
        if ($traitement) {
            return redirect('/traitement/creer')->with('message', 'Vous avez ajouté une nouvelle constante avec succès.');
        }else {
            return redirect('/traitement/creer')->with('message', 'Erreur lors de la création d une nouvelle constante  veuillez rééssayer svp.');
        }
        

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
        return view('traitement.edit', compact('traitement'));
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
        $validatedData = $request->validate([
            'debut_traitement' => 'required|string',
            'fin_traitement' => 'required|string',
            'prix' => 'required|string',
            'note' => 'required|string',
            'date_du_prochain_RDV' => 'required|string',
            'patient' => 'required|string',
            'medecin' => 'required|string',
        ]);

        $traitement->update([

            'debut_traitement' => $validatedData['debut_traitement'],
            'fin_traitement' => $validatedData['fin_traitement'],
            'prix' => $validatedData['prix'],
            'note' => $validatedData['note'],
            'date_du_prochain_RDV' => $validatedData['date_du_prochain_RDV'],
            'patient_id' => $validatedData['patient'],
            'medecin_id' => $validatedData['Medecin'],

         ]);
        if ($traitement) {
            return redirect('/traitement')->with('message', 'modification effectuée avec succès.');
        } else {
            return redirect(route("traitement.edit", $traitement))->with('message', 'Erreur lors de la modification veuillez rééssayer svp.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Traitement  $traitement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Traitement $traitement)
    {
        $traitement->delete();
        
        return redirect('/traitement')->with('message', 'Suppression effectuée avec succès.');
    }
}
