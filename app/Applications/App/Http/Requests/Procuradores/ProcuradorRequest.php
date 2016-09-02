<?php

namespace Sgpweb\Applications\App\Http\Requests\Procuradores;

use Sgpweb\Core\Http\Requests\Request;

class ProcuradorRequest extends Request
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
            'pessoas_id'             => 'required',
            'procurador_tipos_id'    => 'required',
            'codigo_pe'              => 'required|numeric',
            'ativo'                  => 'required'
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
            'pessoas_id.required'             => 'Pessoa é um campo obrigatório',
            'procurador_tipos_id.required'    => 'Tipo de procurador é um campo obrigatório!',
            'codigo_pe.required'              => 'Código do procurador no PE é um campo obrigatório!',
            'codigo_pe.numeric'               => 'Código do procurador no PE é um campo numérico!',
            'ativo.required'                  => 'Ativo é um campo obrigatório!'
        ];
    }
}
