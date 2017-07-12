<?php

namespace App\Model\Painel;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'matricula', 'nota'];
    
   /* public $rules = [
        
            'nome'      => 'required',
            'matricula' => 'required',
            'nota'      => 'required|numeric'
        
    ];*/
}
