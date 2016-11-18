<?php

namespace VCCon\Applications\App\Http\Requests\Reunioes;

use VCCon\Core\Http\Requests\Request;

class ReuniaoRequest extends Request
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
            'tema'                => 'required',
            'observacao'          => 'required',
            'horario_inicio'      => 'required'
        ]
    ;}

    /**
     * Mensagens de alerta.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'tema.required'                => 'Tema é um campo obrigatório!',
            'observacao.required'          => 'Pauta é um campo obrigatório!',
            'horario_inicio.required'      => 'Horário de inicio é um campo obrigatório!'
        ];
    }
}
