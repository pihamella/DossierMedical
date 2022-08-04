<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Medecin;
use App\Models\Secretaire;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patient.index', [
            'patients' => Patient::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create', [
            'medecins' => Medecin::all()
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'references' => 'required|string',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'date' => 'required|date',
            'sexe' => 'required|string',
            'situation_familiale' => 'required|string',
            'assurance_medicale' => 'required|string',
            'telephone' => ['required', 'string', 'min:8', 'max:8', 'starts_with:70,71,72,73,79,90,91,92,93,96,98,99'],
            'nom_pere' => 'required|string',
            'nom_mere' => 'required|string',
            'personne_prevenir' => 'required|string',
            'groupe_sanguin' => 'required|string',
            'medecin' => 'required|string',
            'telephone_personne_prevenir' => ['required', 'string', 'min:8', 'max:8', 'starts_with:70,71,72,73,79,90,91,92,93,96,98,99'],
        ]);

        $patient = Patient::create([
            'reference' => $validatedData['references'],
            'nom_patient' => $validatedData['nom'],
            'prenom_patient' => $validatedData['prenom'],
            'date_naissance' => $validatedData['date'],
            'sexe' => $validatedData['sexe'],
            'situation_familliale' => $validatedData['situation_familiale'],
            'assurance_medicale' => $validatedData['assurance_medicale'],
            'tel_patient' => $validatedData['telephone'],
            'nom_pere' => $validatedData['nom_pere'],
            'nom_mere' => $validatedData['nom_mere'],
            'nom_a_prevenir' => $validatedData['personne_prevenir'],
            'groupe_sanguin' => $validatedData['groupe_sanguin'],
            'tel_a_prevenir' => $validatedData['telephone_personne_prevenir'],
            'medecin_id' => $validatedData['medecin'],
            'secretaire_id' =>  Auth()->user()->role === 'secretaire' ? Secretaire::where('id', Auth()->user()->secretaire_id)->first()->id : null,
        ]);


        if ($patient) {
            return redirect('/patient/creer')->with('message', 'Vous avez ajouté un nouveau patient avec succès.');
        }else {
            return redirect('/patient/creer')->with('message', 'Erreur lors de la création du patient veuillez rééssayer svp.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patient.edit', [
            'patient' => $patient,
            'medecins' => Medecin::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientRequest  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $validatedData = $request->validate([
            'references' => 'required|string',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'date' => 'required|date',
            'sexe' => 'required|string',
            'situation_familiale' => 'required|string',
            'assurance_medicale' => 'required|string',
            'telephone' => ['required', 'string', 'min:8', 'max:8', 'starts_with:70,71,72,73,79,90,91,92,93,96,98,99'],
            'nom_pere' => 'required|string',
            'nom_mere' => 'required|string',
            'personne_prevenir' => 'required|string',
            'groupe_sanguin' => 'required|string',
            'medecin' => 'required|string',
            'telephone_personne_prevenir' => ['required', 'string', 'min:8', 'max:8', 'starts_with:70,71,72,73,79,90,91,92,93,96,98,99'],
        ]);

        $patient->update([
            'reference' => $validatedData['references'],
            'nom_patient' => $validatedData['nom'],
            'prenom_patient' => $validatedData['prenom'],
            'date_naissance' => $validatedData['date'],
            'sexe' => $validatedData['sexe'],
            'situation_familliale' => $validatedData['situation_familiale'],
            'assurance_medicale' => $validatedData['assurance_medicale'],
            'tel_patient' => $validatedData['telephone'],
            'nom_pere' => $validatedData['nom_pere'],
            'nom_mere' => $validatedData['nom_mere'],
            'nom_a_prevenir' => $validatedData['personne_prevenir'],
            'groupe_sanguin' => $validatedData['groupe_sanguin'],
            'tel_a_prevenir' => $validatedData['telephone_personne_prevenir'],
            'medecin_id' => $validatedData['medecin'],
            'secretaire_id' =>  Auth()->user()->role === 'secretaire' ? Secretaire::where('id', Auth()->user()->secretaire_id)->first()->id : null,
        ]);

        if ($patient) {
            return redirect('/patients')->with('message', 'modification effectuée avec succès.');
        } else {
            return redirect(route("patient.edit", $patient))->with('message', 'Erreur lors de la modification veuillez rééssayer svp.');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        
        return redirect('/patients')->with('message', 'Suppression effectuée avec succès.');
    }
}
