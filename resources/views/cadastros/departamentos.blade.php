@extends('adminlte::page')

@section('title', 'Departamentos')

@section('content_header')
    <h1>Cadastrar Departamentos</h1>

    <ol class="breadcrumb">
        <li><a href="">dashboard</a></li>
        <li><a href="">Departamentos</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">

        @if( isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach()
            </div>
        @endif
            
        </div>
        <div class="box-body">
            <form method="post" action="{{route('cadastro.departamento')}}">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="inputNome">Nome</label>
                    <input name="name" type="text" class="form-control" id="inputName" placeholder="Nome do departamento">
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>

            </form>
        
        </div>
    </div>
@stop