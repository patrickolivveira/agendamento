@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading painel_cab">
                    Médicos
                    <a class="btn btn-info pull-right" href="{{ url('medicos/novo') }}">Novo</a>
                </div>

                <div class="panel-body">
                    Listagem de médicos
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
