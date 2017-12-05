@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Informe abaixo as informações do médico
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="panel-body">
                    @if($method == 'put')
                    <form action="{{ route('medicos.update', $medico->id) }}" method="post">
                        {{ csrf_field() }}                        
                        {{ method_field('PUT') }}
                    @else
                    <form action="{{ route('medicos.store') }}" method="post">
                        {{ csrf_field() }}
                    @endif
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input id="nome" type="text" name="nome" class="form-control" value="{{ $medico->nome }}"/>
                        </div>

                        <div class="form-group">
                            <label for="crm">CRM</label>
                            <input id="crm" type="text" name="crm" value="{{ $medico->crm }}" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input id="telefone" type="text" name="telefone" value="{{ $medico->telefone }}" class="form-control"/>
                        </div>

                        <button type="submit" class="btn btn-success">Salvar</button>
                        <a class="btn btn-danger" href="{{ url('/medicos') }}">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection