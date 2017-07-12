<?php

namespace App\Model\Painel;

use Illuminate\Database\Eloquent\Model;

class Endereço extends Model
{
    protected $fillable = ['rua', 'numero', 'bairro'];
    
     /*public $rules = [
        
        'rua' => 'required',
        'numero' => 'required|numeric',
        'bairro' => 'required'
    ];*/
}
