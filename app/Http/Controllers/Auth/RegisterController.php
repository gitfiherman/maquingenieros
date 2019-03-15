<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/'; //home

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'ape_pat' => ['required', 'string', 'max:50'],
            'ape_mat' => ['required', 'string', 'max:50'],
            'nom_com' => ['required', 'string', 'max:150'],            
            'usuario' => ['required', 'string', 'max:50', 'unique:usuarios'],            
            'email' => ['required', 'string', 'email', 'max:80'],            
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'ape_pat' => strtoupper($data['ape_pat']),
            'ape_mat' => strtoupper($data['ape_mat']),
            'nom_com' => strtoupper($data['nom_com']),
            'usuario' => strtoupper($data['usuario']),            
            'email' => $data['email'],
            'rol'=> 'ALUMNO',
            'password' => Hash::make($data['password']),
        ]);
    }
}
