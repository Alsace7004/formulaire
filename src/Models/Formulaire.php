<?php
/* namespace Alsace7004\Formulaire\Models;
class Formulaire{
    //protected $fillable = ['nom','prenom','telephone','email','adresse'];
    public $nom,$prenom,$telephone,$email,$adresse;
} */
?>
<?php

namespace Alsace7004\Formulaire\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulaire extends Model
{
    use HasFactory;

    protected $fillable = ['nom','prenom','telephone','email','adresse'];
}