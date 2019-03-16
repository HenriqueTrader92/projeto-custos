<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    public $timestamps = false;
    protected $table = 'departamentos';

    public static function rules() {
        $rules = array(
            'name' => "max:100|required"
        );

        return $rules;
    }

    public function funcionarios() {
        return $this->belongsToMany(
            Funcionarios::class,'funcionarios_departamentos', 'funcionario_id', 'departamento_id');
    }
}
