@extends('adminlte::page')

@section('title', 'Funcionarios')

@section('content_header')
    <h1>Cadastrar Funcionários</h1>

    <ol class="breadcrumb">
        <li><a href="">dashboard</a></li>
        <li><a href="">Funcionários</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            
        </div>
        <div class="box-body">

        @if( isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach()
            </div>
        @endif

            @if($departamentos->count() == 0)
                <form method="GET" action="{{ route('index.departamentos') }}">
                    <label for="inputCadDepartamentos">Para cadastrar funcionários, inclua primeiro algum departamento</label><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Cadastro de departamentos</button>
                    </div>
                </form>
            @else

                <form method="post" action="{{route('cadastro.funcionario')}}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="inputNome">Nome</label>
                    <input name="name" type="text" class="form-control" id="inputName" placeholder="Nome do funcionario">
                </div>

                <div class="form-group">
                    <label for="inputDepartamentos">Departamentos</label><br>
                    <select name="departamentos[]" id="inputDepartamento" class="selectpicker" multiple>
                        @foreach($departamentos as $departamentos)
                            <option value="{{$departamentos->id}}">{{ $departamentos->name }}</optionp>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>

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
