@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Faça o agendamento da consulta médica
                </div>

                <div class="panel-body">
                    <form action="/agendamentos/salvar" method="post">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <input id="descricao" type="text" name="descricao" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="datahora">Data/Hora</label>
                            <input id="datahora" type="datetime" name="datahora" class="form-control"/>
                        </div>                        

                        <div class="form-group">
                            <label for="paciente">Paciente</label>
                            <select name="paciente_id" id="paciente_id">
                                @foreach($pacientes as $paciente)
                                    <option value="{{ $paciente->id }}"> {{ $paciente->nome }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="medico">Médico</label>
                            <input id="medico" type="text" name="medico" class="form-control"/>
                        </div>                        

                        <button type="submit" class="btn btn-success">Salvar</button>
                        <a class="btn btn-danger" href="{{ url('/agendamentos') }}">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



