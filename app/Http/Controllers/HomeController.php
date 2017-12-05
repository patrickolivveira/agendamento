<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Medico;
use App\Agendamento;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num_pacientes = Paciente::count();
        $num_medicos = Medico::count();
        $consultas_hoje = 666;
        // $consultas_hoje = Agendamento::where('datahora->format("Y-m-d")','=','TODAY')->count();

        return view('home')->with('num_pacientes', $num_pacientes)
                            ->with('num_medicos', $num_medicos)
                            ->with('consultas_hoje', $consultas_hoje);
    }
}
