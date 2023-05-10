<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residuos extends Model
{
    use HasFactory;
    protected $fillable = ['residuo','description','estado','cantidad','cedula',];
}
