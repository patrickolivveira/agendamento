<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    //

    public function medico()
    {
        return $this->belongsTo('\App\Medico');
    }

    public function paciente()
    {
        return $this->belongsTo('\App\Paciente');
    }
}
