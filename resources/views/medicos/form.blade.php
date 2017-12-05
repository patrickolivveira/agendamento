@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Informe abaixo as informações do médico
                </div>

                <div class="panel-body">
                    <form action="/medicos/salvar" method="post">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input id="nome" type="text" name="nome" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="crm">CRM</label>
                            <input id="crm" type="text" name="crm" class="form-control"/>
                        </div>                        

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input id="telefone" type="text" name="telefone" class="form-control"/>
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



