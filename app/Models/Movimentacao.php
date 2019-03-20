<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Movimentacao extends Model
{
    //
    protected $table = 'movimentacoes';
    public $timestamps = false;

    public function search(Array $data, $totalPage)
    {

        $todasMovimentacao = DB::table('movimentacoes')
                                    ->join('funcionarios_departamentos', 'funcionario_departamento_id', '=', 'funcionarios_departamentos.id')
                                    ->join('funcionarios', 'funcionarios_departamentos.funcionario_id', '=', 'funcionarios.id')
                                    ->select('movimentacoes.valor', 'movimentacoes.descricao', 'funcionarios.name')
                                    ->where( function ($query) use ($data) {
                                        if(isset($data['funcionario']))
                                            $query->where('name', "LIKE", '%'.$data['funcionario'].'%');

                                        if(isset($data['descricao']))
                                            $query->where('descricao', "LIKE", '%'.$data['descricao'].'%');
                                    })
                                    ->paginate($totalPage);

        return $todasMovimentacao;
    }
}
