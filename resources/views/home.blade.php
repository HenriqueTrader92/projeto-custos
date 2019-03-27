@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Tela Principal</h1>
@stop

@section('content')

<div class="box-header">
        <h3>Tudo em um só lugar</h3>
</div>
<div class="box-body">

    <div class="col-lg-3">
    @include('partials.allFuncionarios')
        <div class="col-lg-14">
        @include('partials.cadFunc')
        </div>
    </div>

    <div class="col-lg-3">
    @include('partials.allDepartamentos')
        <div class="col-lg-14">
        @include('partials.cadDepart')
        </div>
    </div>

    <div class="col-lg-3">
        @include('partials.cadMov')
    </div>
    
</div>
@stop

