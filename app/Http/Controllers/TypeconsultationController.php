<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTypeconsultationRequest;
use App\Http\Requests\UpdateTypeconsultationRequest;
use App\Models\Typeconsultation;
use Illuminate\Http\Request;

class TypeconsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('type_consultation.index', [
            'type_consultations' => TypeConsultation::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type_consultation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTypeconsultationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom_type_consultation' => 'required|string',
            'prix_type_consultation' => 'required|string',
        ]);

        $type_consultation = TypeConsultation::create([
            'nom_Type_consultation' => $validatedData['nom_type_consultation'],
            'prix_consultation' => $validatedData['prix_type_consultation'],
        ]);

        if ($type_consultation) {
            return redirect('/type_consultation/creer')->with('message', 'Vous avez ajouté un nouveau type de consultation avec succès.');
        }else {
            return redirect('/type_consultation/creer')->with('message', 'Erreur lors de la création du type de consultation veuillez rééssayer svp.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Typeconsultation  $typeconsultation
     * @return \Illuminate\Http\Response
     */
    public function show(Typeconsultation $typeconsultation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typeconsultation  $typeconsultation
     * @return \Illuminate\Http\Response
     */
    public function edit(Typeconsultation $type_consultation)
    {
        return view('type_consultation.edit', compact('type_consultation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeconsultationRequest  $request
     * @param  \App\Models\Typeconsultation  $typeconsultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeConsultation $type_consultation)
    {

        $validatedData = $request->validate([
            'nom_type_consultation' => 'required|string',
            'prix_type_consultation' => 'required|string',
        ]);

        $type_consultation->update([
            'nom_Type_consultation' => $validatedData['nom_type_consultation'],
            'prix_consultation' => $validatedData['prix_type_consultation'],
        ]);

        if ($type_consultation) {
            return redirect('/type_consultation')->with('message', 'modification effectuée avec succès.');
        } else {
            return redirect(route("type_consultation.edit", $type_consultation))->with('message', 'Erreur lors de la modification veuillez rééssayer svp.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typeconsultation  $typeconsultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeConsultation $type_consultation)
    {
        $type_consultation->delete();
        
        return redirect('/type_consultation')->with('message', 'Suppression effectuée avec succès.');
    }
}
