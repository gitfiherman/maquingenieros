<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Llamadas extends Model
{
    public $timestamps = false;
    protected $table = 'system.llamadas';
    protected $fillable = [
        'ape_com','nom_com','movil','fijo','obs','id_cur','otros_cur','fch_llamada','wasap','id_est_llamada','id_asesor','prox_fch_llamada'
    ];
    protected $primaryKey='id';
}
