<?php

namespace VCCon\Domains\Condominos\Repositories;

use VCCon\Domains\Condominos\Contracts\CarroCondominoContract;
use VCCon\Domains\Condominos\Models\CarroCondomino;

class CarroCondominoRepository implements CarroCondominoContract
{   

    /**
     * Cria variável para o construtor de carro Condomino.
     *
     * @var string
     */
    private $carroCondomino;

    /**
     * Função para injetar o objeto Condomino.
     *
     * @var string
     */
    public function __construct(CarroCondomino $carroCondomino)
    {
        $this->carroCondomino = $carroCondomino;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->carroCondomino->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->carroCondomino->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->carroCondomino->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute = 'id') {
        return $this->carroCondomino->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->carroCondomino->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->carroCondomino->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->carroCondomino->query()->where($attribute, '=', $value)->first($columns);
    }

    public function lists($columns, $key = 'id')
    {
        return $this->carroCondomino->query()->pluck($columns, $key);
    }

    public function listsWhere($attribute, $value, $columns, $key = 'id')
    {
        return $this->carroCondomino->query()->where($attribute, '=', $value)->pluck($columns, $key);
    }
}