<?php

namespace VCCon\Domains\AreasExternas\Repositories;

use VCCon\Domains\AreasExternas\Contracts\AreaExternaContract;
use VCCon\Domains\AreasExternas\Models\AreaExterna;

class AreaExternaRepository implements AreaExternaContract
{   

    /**
     * Cria variável para o construtor de AreaExterna.
     *
     * @var string
     */
    private $areaExterna;

    /**
     * Função para injetar o objeto AreaExterna.
     *
     * @var string
     */
    public function __construct(AreaExterna $areaExterna)
    {
        $this->areaExterna = $areaExterna;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->areaExterna->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->areaExterna->query()->with('condominos')->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->areaExterna->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute = 'id') {
        return $this->areaExterna->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->areaExterna->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->areaExterna->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->areaExterna->query()->where($attribute, '=', $value)->first($columns);
    }

    public function lists($columns, $key = 'id')
    {
        return $this->areaExterna->query()->pluck($columns, $key);
    }

    public function listsWhere($attribute, $value, $columns, $key = 'id')
    {
        return $this->areaExterna->query()->where($attribute, '=', $value)->pluck($columns, $key);
    }
}