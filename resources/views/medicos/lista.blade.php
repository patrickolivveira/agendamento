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
                    <a class="btn btn-primary pull-right" href="{{ route('medicos.create') }}">Novo</a>
                </div>
                <div class="panel-body">
                    @if(count($medicos) > 0)
                    <table id="medico_table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>CRM</th>
                                <th>Telefone</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($medicos as $medico)
                            <tr>
                                <td>{{ $medico->id }}</td>
                                <td>{{ $medico->nome }}</td>
                                <td>{{ $medico->crm }}</td>
                                <td>{{ $medico->telefone }}</td>
                                <td><a href="{{ route('medicos.edit', $medico->id) }}" class="btn btn-primary"> Editar </a></td>
                                 <td>
                                    <form action="{{ route('medicos.destroy', $medico->id ) }}" method="POST">
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
                        <p>Não há médicos cadastrados no momento!</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('external_js')
@if(count('medicos') > 0)
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
    $('#medico_table').DataTable();
});
</script>
@endif
@endsection