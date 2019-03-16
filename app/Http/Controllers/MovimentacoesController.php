<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamentos;
use App\Models\Funcionarios;

class MovimentacoesController extends Controller
{
    protected $departamentos;
    protected $funcionarios;

    public function __construct(Departamentos $departamentos,Funcionarios $funcionarios){
        $this->departamentos = $departamentos;
        $this->funcionarios = $funcionarios;
    }

    public function movimentacoes()
    {
        $departamentos = $this->departamentos->all();
        $funcionarios = $this->funcionarios->all();

        return view('financeiro.movimentacoes', compact('departamentos', 'funcionarios'));
    }

    public function cadastraMovimentacoes(Request $request)
    {
        dd($request->all());
    }
}
