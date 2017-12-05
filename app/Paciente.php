<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'nome',
        'sexo',
        'data_nascimento',
        'telefone',
        'endereco',
    ];

    public function agendamentos()
    {
        return $this->hasMany('App\Agendamento');
    }
}
