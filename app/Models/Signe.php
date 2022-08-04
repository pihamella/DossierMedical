<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signe extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = ['Etat_general', 'Etat_de_Concience', 'Etat_de_conjontive', 'OMI', 'Etat_physique', 'Diagnostic', 'secretaireId ', 'Patient_id' ];

}
