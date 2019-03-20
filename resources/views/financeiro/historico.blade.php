Array de FUncionarios
nome do departamento atual
*opiciional - valor do dinheiro


@extends('adminlte::page')

@section('title', 'Histórico de movimentações')

@section('content_header')
    <h1>Histórico de movimentações</h1>

    <ol class="breadcrumb">
        <li><a href="">dashboard</a></li>
        <li><a href="">Historico</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <form action="{{ route('historico.search')}}" method="POST" class="form form-inline">
            {!! csrf_field() !!}

                <input type="text" name="descricao" class="form-control" placeholder="Descricao"> 
                <input type="text" name="funcionario" class="form-control" placeholder="Funcionario"> 

                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </form>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Funcionario</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                @if(isset($movimentacao))
                    @foreach($movimentacao as $mov)
                    <tr>
                        <td> {{$mov->name}} </td>
                        <td> {{$mov->descricao}} </td>
                        <td> {{number_format($mov->valor, 2, ',', '.')}} </td>
                    </tr>
                    @endforeach
                @else
                @endif
                </tbody>
            </table>    
            @if(isset($movimentacao))
                @if(isset($dataForm))
                    {!! $movimentacao->appends($dataForm)->links() !!}
                @else
                    {!! $movimentacao->links() !!}
                @endif
            @else
            @endif

        </div>
    </div>
@stop