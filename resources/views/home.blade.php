@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está logado!
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Pacientes cadastrados</div>

                <div class="panel-body">
                    <p>70</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Médicos cadastrados</div>

                <div class="panel-body">
                    <p>10</p>
                </div>
            </div>
        </div>        

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">{{ date('d/m/Y') }} - Consultas</div>

                <div class="panel-body">
                    <p>25</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
