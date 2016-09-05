<?php

namespace VCCon\Domains\Condominos\Repositories;

use VCCon\Domains\Condominos\Contracts\CondominoContract;
use VCCon\Domains\Condominos\Models\Condomino;

class CondominoRepository implements CondominoContract
{   

    /**
     * Cria variável para o construtor de Condomino.
     *
     * @var string
     */
    private $condomino;

    /**
     * Função para injetar o objeto Condomino.
     *
     * @var string
     */
    public function __construct(Condomino $condomino)
    {
        $this->condomino = $condomino;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->condomino->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->condomino->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->condomino->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute = 'id') {
        return $this->condomino->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->condomino->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->condomino->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->condomino->query()->where($attribute, '=', $value)->first($columns);
    }

    public function lists($columns, $key = 'id')
    {
        return $this->condomino->query()->pluck($columns, $key);
    }

    public function listsWhere($attribute, $value, $columns, $key = 'id')
    {
        return $this->condomino->query()->where($attribute, '=', $value)->pluck($columns, $key);
    }
}