<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    public $timestamps = false;
    protected $table = 'contacto';
    protected $fillable = [
        'nombres','apellidos','email','region','area_formacion','area_trabajo','industria','telefono','message','fch','ano_eje','origen'
    ];
    protected $primaryKey='id';
}
