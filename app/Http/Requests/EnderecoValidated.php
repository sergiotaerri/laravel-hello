<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnderecoValidated extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "cep" => "required",
            "logradouro" => "required",
            "complemento" => "required",
            "bairro" => "required",
            "localidade" => "required",
            "uf" => "required",
            "ibge" => "required",
            "gia" => "required",
            "ddd" => "required",
            "siafi" => "required",
        ];
    }
}
