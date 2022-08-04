<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['reference', 'nom_patient', 'prenom_patient', 'date_naissance', 'sexe', 'situation_familliale', 'assurance_medicale', 'tel_patient', 'nom_pere', 'nom_mere', 'nom_a_prevenir', 'groupe_sanguin', 'tel_a_prevenir', 'secretaire_id', 'medecin_id'];
}
