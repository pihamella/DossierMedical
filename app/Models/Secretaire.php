<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Secretaire extends Authenticatable
{
    use HasFactory;

    protected $table = 'secretaire';
}
