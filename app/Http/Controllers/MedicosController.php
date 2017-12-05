<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MedicosController extends Controller
{
    public function index(){
        return view('medicos.lista');
    }

    public function novo(){
        return view('medicos.form');
    }    

    public function salvar(Request $request){
        return view('medicos.lista');
    }        
}
