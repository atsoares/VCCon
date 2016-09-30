<?php

namespace VCCon\Applications\App\Http\Requests\Funcionarios;

use VCCon\Core\Http\Requests\Request;

class FuncionarioRequest extends Request
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
            'nome'        => 'required',
            'telefone'    => 'required',
            'cpf'         => 'required',
            'funcao_id'   => 'required',
            'ativo'       => 'required'
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
            'nome.required'        => 'Número é um campo obrigatório!',
            'telefone.required'    => 'Ocupado é um campo obrigatório!',
            'cpf.required'         => 'CPF é um campo obrigatório!',
            'funcao_id.required'   => 'Função é um campo obrigatório!',
            'ativo.required'       => 'Ativo é um campo obrigatório!'
        ];
    }
}
