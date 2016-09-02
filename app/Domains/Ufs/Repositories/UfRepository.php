<?php

namespace Sgpweb\Domains\Ufs\Repositories;

use Sgpweb\Domains\Ufs\Contracts\UfContract;
use Sgpweb\Domains\Ufs\Uf;

class UfRepository implements UfContract
{   

    /**
     * Cria variável para o construtor de Uf.
     *
     * @var string
     */
    private $uf;

    /**
     * Função para injetar o objeto Uf.
     *
     * @var string
     */
    public function __construct(Uf $uf)
    {
        $this->uf = $uf;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->uf->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->uf->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->uf->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute = 'id') {
        return $this->uf->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->uf->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->uf->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->uf->query()->where($attribute, '=', $value)->first($columns);
    }

    public function lists($columns, $key = 'id')
    {
        return $this->uf->query()->pluck($columns, $key);
    }

    public function listsWhere($attribute, $value, $columns, $key = 'id')
    {
        return $this->uf->query()->where($attribute, '=', $value)->pluck($columns, $key);
    }
}