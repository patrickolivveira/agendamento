@extends('layouts.app')
@section('external_css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading painel_cab">
                    Agendamentos
                    <a class="btn btn-primary pull-right" href="{{ route('agendamentos.create') }}">Novo</a>
                </div>
                <div class="panel-body">
                    @if(count($agendamentos) > 0)
                    <table id="agendamento_table" class="table table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Data/Hora</th>
                                <th>Descrição</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($agendamentos as $agendamento)
                            <tr>
                                <td>{{ $agendamento->id }}</td>
                                <td>{{ $agendamento->datahora }}</td>
                                <td>{{ $agendamento->descricao }}</td>
                                <td><a href="{{ route('agendamentos.edit', $agendamento->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></a></td>
                                 <td>
                                    <form action="{{ route('agendamentos.destroy', $agendamento->id ) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></button>
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
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#agendamento_table').DataTable( {
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
                }
            } );            
        } );   
    </script> 
@endif
@endsection