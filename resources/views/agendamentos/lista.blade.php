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
                    Médicos
                    <a class="btn btn-primary pull-right" href="{{ route('agendamentos.create') }}">Novo</a>
                </div>
                <div class="panel-body">
                    @if(count($agendamentos) > 0)
                    <table id="agendamento_table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Data/Hora</th>
                                <th>Descrição</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($agendamentos as $agendamento)
                            <tr>
                                <td>{{ $agendamento->id }}</td>
                                <td>{{ $agendamento->datahora }}</td>
                                <td>{{ $agendamento->descricao }}</td>
                                <td><a href="{{ route('agendamentos.edit', $agendamento->id) }}" class="btn btn-primary"> Editar </a></td>
                                 <td>
                                    <form action="{{ route('agendamentos.destroy', $agendamento->id ) }}" method="POST">
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
                        <p>Não há agendamentos cadastrados!</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('external_js')
@if(count('agendamentos') > 0)
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
    $('#agendamento_table').DataTable();
});
</script>
@endif
@endsection