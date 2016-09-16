<?php

namespace VCCon\Applications\App\Http\Requests\Condominos;

use VCCon\Core\Http\Requests\Request;

class CarroCondominoRequest extends Request
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
            'modelo'        => 'required',
            'marca'         => 'required',
            'ano'           => 'required|leapYear|min:4',
            'placa'         => 'required|min:7',
            'condomino_id'  => 'required',
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
            'modelo.required'         => 'Modelo é um campo obrigatório!',
            'marca.required'          => 'Marca é um campo obrigatório!',
            'ano.required'            => 'Ano é um campo obrigatório!',
            'ano.leapYear'            => 'Ano não é válido!',
            'ano.min'                 => 'Ano possui 4 dígitos!',
            'placa.required'          => 'Placa é um campo obrigatório!',
            'placa.min'               => 'Placa possui 7 dígitos!',
            'condomino_id.required'   => 'Nome do condômino é um campo obrigatório!',
            'ativo.required'          => 'Ativo é um campo obrigatório!'
        ];
    }
}
