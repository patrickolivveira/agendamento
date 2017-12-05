@extends('layouts.app')
@section('external_css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading painel_cab">
                    Pacientes
                    <a class="btn btn-primary pull-right" href="{{ route('pacientes.create') }}">Novo</a>
                </div>
                <div class="panel-body">
                    @if(count($pacientes) > 0)
                    <table id="paciente_table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pacientes as $paciente)
                            <tr>
                                <td>{{ $paciente->id }}</td>
                                <td>{{ $paciente->nome }}</td>
                                <td>{{ $paciente->telefone }}</td>
                                <td><a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-primary"> Editar </a></td>
                                 <td>
                                    <form action="{{ route('pacientes.destroy', $paciente->id ) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" type="submit">Excluir</button>
                                    </form>
                                </td> 
                                    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <p>Não há pacientes cadastrados no momento!</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('external_js')
@if(count('pacientes') > 0)
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
    $('#paciente_table')
                        .DataTable();
                        // .removeClass( 'display' )
		                // .addClass('table table-striped table-bordered');
});
</script>
@endif
@endsection