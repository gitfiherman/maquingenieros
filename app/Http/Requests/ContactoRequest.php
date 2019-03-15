<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'nombres' => 'min:3|required|max:50',            
            'apellidos' => 'min:3|required|max:50',
            'region' => 'required',
            'area_form' => 'required',
            'area_trab' => 'required',
            'industria' => 'required',
            'telefono' => 'required|min:9|max:20',
            'email' => 'required|email',
            'message' => 'required|max:150',
        ];
    }
    
    public function messages()
    {
      return [
        'nombres.required' => 'Olvidaste colocar tu nombre',
        'apellidos.required' => 'Olvidaste colocar tu apellido',
        'region.required' => 'Olvidaste seleccionar tu región',
        'area_form.required' => 'Selecciona tu Área de Formación',
        'area_trab.required' => 'Seleccione su Área de Trabajo',
        'industria.required' => 'Seleccione la Industria',
        'nivel.min' => 'El nivel como mínimo debe tener 0',
        'nivel.max' => 'El nivel como máximo debe tener 10',
        'nivel.integer' => 'El nivel debe ser una cifra entre 0 y 10'
      ];
    }               
}
