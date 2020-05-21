<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCursoRequest extends FormRequest
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
            'titulo' => ['required', 'min:3', 'max:100'], 
            'descrição' => ['nullable', 'min:10', 'max:100'], 
            
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O título é obrigatório',
            'titulo.min' => 'O tamanho mínimo título: 3 caracteres',
            'descricao.min' => 'O tamanho mínimo descrição: 10 caracteres',
        ];
    }
}
