<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constante extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = ['poids', 'temperature', 'taille','tension','note','secretaireId','patient_id'];

}
