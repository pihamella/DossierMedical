<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signe extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = ['etat_general', 'etat_de_Concience', 'etat_de_conjontive', 'OMI', 'etat_physique', 'diagnostic', 'secretaireId', 'Patient_id' ];

}
