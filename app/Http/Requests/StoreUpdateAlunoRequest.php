<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAlunoRequest extends FormRequest
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
            'name' => ['required', 'min:4', 'max:100'], 
            'email' => ['required', 'min:10', 'max:100'], 
            'birthdate' => 'required|min:10|max:10', 
            //'birthdate' => 'required|date_format:d/m/Y|min:10|max:10',
            'sex' => 'nullable|min:1|max:1', 
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome é obrigatório',
            'name.min' => 'O tamanho mínimo nome: 4 caracteres',
            'email.required' => 'O email é obrigatório',
            'email.min' => 'O tamanho mínimo email: 10 caracteres',
            'birthdate.required' => 'A data de nascimento é obrigatória',
            'birthdate.min' => 'Data de Nascimento: tamanho de 10 caracteres (no formato:dd/mm/aaaa)'
        ];
    }
}
