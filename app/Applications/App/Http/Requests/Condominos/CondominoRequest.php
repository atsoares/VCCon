<?php

namespace VCCon\Applications\App\Http\Requests\Condominos;

use VCCon\Core\Http\Requests\Request;

class CondominoRequest extends Request
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
     * Cria regras de validação para os seguintes campos no momento do request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required',
            'email'         => 'required|email',
            'cpf'           => 'required|numeric|cpf|min:11',
            'telefone'      => 'required|numeric',
            'unidade_id'    => 'required',
            'ativo'         => 'required'
        ];
    }

    /**
     * Mensagens de alerta.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'           => 'Nome é um campo obrigatório!',
            'email.required'          => 'Email é um campo obrigatório!',
            'email.email'             => 'Digite um email válido!',
            'cpf.required'            => 'CPF é um campo obrigatório!',
            'cpf.cpf'                 => 'CPF não é válido!',
            'cpf.min'                 => 'CPF possui 11 dígitos!',
            'cpf.numeric'             => 'CPF é um campo numérico!',
            'telefone.required'       => 'Telefone é um campo obrigatório!',
            'telefone.numeric'        => 'Somente números no campo telefone!',
            'unidade_id.required'     => 'Número da unidade do condômino é um campo obrigatório!',
            'ativo.required'          => 'Ativo é um campo obrigatório!'
        ];
    }
}
