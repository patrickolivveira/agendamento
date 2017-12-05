@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading painel_cab">
                    Agendamentos
                    <a class="btn btn-info pull-right" href="{{ url('agendamentos/novo') }}">Novo</a>
                </div>

                <div class="panel-body">
                    Listagem de agendamentos
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
