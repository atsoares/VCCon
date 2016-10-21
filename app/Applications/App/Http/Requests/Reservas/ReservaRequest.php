<?php

namespace VCCon\Applications\App\Http\Requests\Reservas;

use VCCon\Core\Http\Requests\Request;

class ReservaRequest extends Request
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
            'condomino_id'   => 'required',
            'area_externa_id'   => 'required',
            'observacao'     => 'required',
            'horario_inicio' => 'required',
            'ativo'          => 'required'
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
            'condomino_id.required'   => 'Condômino é um campo obrigatório!',
            'area_externa_id.required'   => 'Área externa é um campo obrigatório!',
            'observacao.required'     => 'Observação é um campo obrigatório!',
            'horario_inicio.required' => 'Horário de inicip é um campo obrigatório!',
            'ativo.required'          => 'Ativo é um campo obrigatório!'
        ];
    }
}
