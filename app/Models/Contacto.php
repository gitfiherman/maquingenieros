<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    public $timestamps = false;
    protected $table = 'contacto';
    protected $fillable = [
        'nombres','apellidos','email','id_reg','id_area_formacion','id_area_trabajo','id_industria','telefono','message','fch','ano_eje','origen'
    ];
    protected $primaryKey='id';
}
