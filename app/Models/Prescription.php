<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = ['nom_de_formation', 'date_prescrition', 'note', 'Medecin_id', 'patient_id'];

}
