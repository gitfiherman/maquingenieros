<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContactoRequest;
use Illuminate\Support\Facades\Validator;

class ContactoController extends Controller
{
    public function create(){        
        $regiones = DB::select('select reg_id,reg_desc from regiones');
        $area_form = DB::select('select id,"desc" from area_formacion');
        $area_trab = DB::select('select id,"desc" from area_trabajo');
        $industria = DB::select('select id,"desc" from industria');
        return view('webb.contacto', compact('regiones','area_form','area_trab','industria'));
    }
    
    protected function validator_v(array $data)
    {
        return Validator::make($data, [
            'nombres' => ['required', 'string', 'min:3'],
            'apellidos' => ['required', 'string', 'min:3']            
        ]);
    }
    
    public function store(ContactoRequest $request,$type){   
        if($type=='cwb'){
            $type='WEB';
        }else if($type=='cfb'){
            $type='FACEBOOK';
        }

        Contacto::create([
            'nombres'       => strtoupper($request['nombres']),
            'apellidos'     => strtoupper($request['apellidos']),
            'email'         => $request['email'],
            'region'        => $request['region'],            
            'area_formacion'=> $request['area_form'],
            'area_trabajo'  => $request['area_trab'],
            'industria'     => $request['industria'],
            'telefono'      => $request['telefono'],
            'message'       => $request['message'],
            'fch'           => date('d-m-Y'),
            'ano_eje'       => date('Y'),
            'origen'        => $type
        ]);
        

        \Mail::to($request['email'])->send(new \App\Mail\ContactoEmail($request));
        
        if($type=='WEB'){
            return redirect('enviarcontacto')->with('alert', 'Updated!');
        }else if($type=='FACEBOOK'){
            return redirect('msinfo')->with('alert', 'Updated!');
        }
        
        
    }
     function mas_informacion(){
        $regiones = DB::select('select reg_id,reg_desc from regiones');
        $area_form = DB::select('select id,"desc" from area_formacion');
        $area_trab = DB::select('select id,"desc" from area_trabajo');
        $industria = DB::select('select id,"desc" from industria');
        return view('webb.mas_info', compact('regiones','area_form','area_trab','industria'));
     }
}


//        $validator = Validator::make($request->all(), [
//            'nombres' => 'required|string|min:3',
//            'apellidos' => 'required|string|min:3' 
//        ]);
//
//        if ($validator->fails()) {
//            return back()
//                        ->withErrors($validator)
//                        ->withInput();
//        }
//        dd($request->all());