<?php

namespace App\Models\views;

use Illuminate\Database\Eloquent\Model;

class vw_llamadas extends Model
{
    public $timestamps = false;
    protected $table = 'system.vw_data_llamadas';
    protected $fillable = [
        'ape_com','nom_com','movil','fijo','obs','id_cur','curso','otros_cur','fch_llamada','wasap','id_est_llamada','est_llamada','id_asesor','asesor','prox_fch_llamada'
    ];
    protected $primaryKey='id';
}
