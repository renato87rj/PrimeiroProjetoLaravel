<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'nome'      => 'required',
            'matricula' => 'required',
            'nota'      => 'required|numeric',
            'rua'       => 'required',
            'numero'    => 'required|numeric',
            'bairro'    => 'required'
            
        ];
    }
    
    public function messages() {
        return [
          
            'nome.required' => 'O nome precisa ser preenchido',
            'matricula.required' => 'Matricula tem que ser preenchido',
            'nota.required' => 'Nota precisa ser preenchida',
            'nota.numeric' => 'Nota precisa ser somente numeros',
            'rua.required' => 'Rua precisa ser preenchido',
            'numero.required' => 'Numero precisa ser preenchido',
            'numero.numeric' => 'Numero precisa ser somente numeros',
            'bairro.required' => 'Bairro precisa ser preechido',
            
        ];
    }
}
