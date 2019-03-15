<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{    
    public function __construct()
    {        
        $this->middleware('auth');        
    }
    
    public function index()
    {
        if(Auth::user()->rol=="ADMINISTRADOR" || Auth::user()->rol=="EDITOR"){
            return view('home');
        }else if(Auth::user()->rol=="ALUMNO"){
            return redirect('/');
        }        
    }
}
