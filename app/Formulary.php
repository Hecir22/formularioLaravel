<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulary extends Model
{
    protected $table = 'formulary';

    protected $fillable = ['nombresyapellidos','tipodocumento','numerodocumento','correo','fecha_nac','direccion'];
}
