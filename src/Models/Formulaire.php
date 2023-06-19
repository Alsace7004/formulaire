<?php

namespace Alsace7004\Formulaire\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulaire extends Model
{
    use HasFactory;

    protected $fillable = ['nom','prenom','telephone','email','adresse'];
}