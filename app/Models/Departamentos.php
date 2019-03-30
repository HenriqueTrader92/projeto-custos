<?php

namespace App\Models;

use App\Models\Funcionarios;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    public $timestamps = false;
    protected $table = 'departamentos';

    public function funcionarios()
    {
        return $this->hasMany(Funcionarios::class);
    }
}
