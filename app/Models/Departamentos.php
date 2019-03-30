<?php

namespace App\Models;

use App\Models\Funcionarios;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    public $timestamps = false;
    protected $table = 'departamentos';

    public static function rules() {
        $error = array(
            'name' => "max:100|required"
        );

        return $error;
    }

    public static function customMsgRules () {
        $customMessages = [
            'required' => 'O campo " :attribute " é obrigatório'
        ];

        return $customMessages;
    }

    public function funcionarios() {
        return $this->belongsToMany(
            Funcionarios::class,'funcionarios_departamentos', 'funcionario_id', 'departamento_id');
    }
}
