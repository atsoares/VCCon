<?php

namespace VCCon\Applications\App\Http\Requests\Funcionarios;

use VCCon\Core\Http\Requests\Request;

class FuncaoRequest extends Request
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
            'nome'    => 'required',
            'ativo'   => 'required'
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
            'nome.required'    => 'Nome é um campo obrigatório!',
            'ativo.required'   => 'Ativo é um campo obrigatório!'
        ];
    }
}
