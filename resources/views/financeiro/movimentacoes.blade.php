@extends('adminlte::page')

@section('title', 'Movimentações')

@section('content_header')
    <h1>Movimentações</h1>

    <ol class="breadcrumb">
        <li><a href="">dashboard</a></li>
        <li><a href="">Financeiro</a></li>
        <li><a href="">Movimentações</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Insira os custos para o departamento:</h3>
        </div>
        <div class="box-body">

            @if($funcionarios->count() == 0)
                <form method="GET" action="{{ route('index.funcionarios') }}">
                    <label for="inputCadFuncionarios">Para adicionar movimentações no sistema, cadastre primeiro um funcionário</label><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Cadastro de funcionários</button>
                    </div>
                </form>
            @else

            @include('financeiro.includes.alerts')
                <form method="POST" action="{{ route('cadastra.movimentacoes') }}">
                    {!! csrf_field() !!}

                    <div class="form-group">
                    <label for="inputDepartamentos">Departamento</label><br>
                    <select name="departamentos" id="inputDepartamento" class="selectpicker">
                        @foreach($departamentos as $departamentos)
                            <option value="{{$departamentos->id}}">{{ $departamentos->name }}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                    <label for="inputFuncionarios">Funcionario</label><br>
                    <select name="funcionarios" id="inputFuncionarios" class="selectpicker">
                        @foreach($funcionarios as $funcionarios)
                            <option value="{{$funcionarios->id}}">{{ $funcionarios->name }}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                        <input type="text" name="descricao" placeholder="Descricao" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="text" name="valor" placeholder="Valor" style="width:150px;" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Adicionar</button>
                    </div>
                </form>
            @endif
        </div>
    </div>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
@stop