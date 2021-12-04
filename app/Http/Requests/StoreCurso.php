<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "name" => "required|min:3|max:30",
            "description" => "required|min:10|max:400",
            "category" => "required"
        ];
    }

    public function attributes()
    {
        return [
            "name" => "Nome",
            "description" => "Descrição",
            "category" => "Categoria"
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "O preenchimento do campo Nome é obrigatório!",
            "description.required" => "O preenchimento do campo Descrição é obrigatório!",
            "category.required" => "O preenchimento do campo Categoria é obrigatório!"
        ];
    }
}
