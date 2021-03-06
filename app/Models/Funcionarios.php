<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    public $timestamps = false;
    protected $table = 'funcionarios';

    public static function rules() {

        $error = array(
            'departamentos' => "required",
            'name' => "required|max:200"
        );

        return $error;
    }

    public static function customMsgRules () {
        $customMessages = [
            'required' => 'O campo " :attribute " é obrigatório'
        ];

        return $customMessages;
    }

    public function departamentos() {
        return $this->belongsToMany(
            Departamentos::class,'funcionarios_departamentos', 'funcionario_id', 'departamento_id');
    }
}
