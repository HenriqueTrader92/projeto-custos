<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamentos;
use App\Models\Funcionarios;
use App\Models\Departamentos_Funcionarios;
use App\Models\Movimentacao;

class MovimentacoesController extends Controller
{
    protected $departamentos;
    protected $funcionarios;
    protected $departamentos_funcionarios;
    protected $movimentacao;

    public function __construct(Movimentacao $movimentacao,Departamentos $departamentos,Funcionarios $funcionarios,Departamentos_Funcionarios $departamentos_funcionarios ){
        $this->departamentos = $departamentos;
        $this->funcionarios = $funcionarios;
        $this->departamentos_funcionarios = $departamentos_funcionarios;
        $this->movimentacao = $movimentacao;
    }

    public function movimentacoes()
    {
        $departamentos = $this->departamentos->all();
        $funcionarios = $this->funcionarios->all();

        return view('financeiro.movimentacoes', compact('departamentos', 'funcionarios'));
    }

    public function cadastraMovimentacoes(Request $request)
    {
        $departamentos_funcionarios = $this->departamentos_funcionarios
        ->where('funcionario_id', $request->funcionarios)
        ->where('departamento_id', $request->departamentos)->first();
        //dd($departamentos_funcionarios);
        
        $novaMovimentacao = $this->movimentacao;
        $novaMovimentacao->funcionario_departamento_id = $departamentos_funcionarios->id;
        $novaMovimentacao->descricao = $request->descricao;
        $novaMovimentacao->valor = $request->valor;
        $novaMovimentacao->save();

        return redirect()->back();
    }
}
