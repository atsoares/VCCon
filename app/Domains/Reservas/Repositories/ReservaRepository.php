<?php

namespace VCCon\Domains\Reservas\Repositories;

use VCCon\Domains\Reservas\Contracts\ReservaContract;
use VCCon\Domains\Reservas\Models\Reserva;

class ReservaRepository implements ReservaContract
{   

    /**
     * Cria variável para o construtor de Reserva.
     *
     * @var string
     */
    private $reserva;

    /**
     * Função para injetar o objeto Reserva.
     *
     * @var string
     */
    public function __construct(Reserva $reserva)
    {
        $this->reserva = $reserva;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->reserva->query()->orderBy('horario_inicio')->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->reserva->query()->orderBy('horario_inicio')->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->reserva->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute = 'id') {
        return $this->reserva->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->reserva->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->reserva->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->reserva->query()->where($attribute, '=', $value)->first($columns);
    }

    public function lists($columns, $key = 'id')
    {
        return $this->reserva->query()->pluck($columns, $key);
    }

    public function listsWhere($attribute, $value, $columns, $key = 'id')
    {
        return $this->reserva->query()->where($attribute, '=', $value)->pluck($columns, $key);
    }
}