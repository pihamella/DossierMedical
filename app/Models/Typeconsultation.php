<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeconsultation extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'typeConsultation';

    protected $fillable = ['nom_Type_consultation', 'prix_consultation'];
}
