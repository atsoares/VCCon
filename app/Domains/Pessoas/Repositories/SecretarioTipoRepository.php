<?php

namespace Sgpweb\Domains\Pessoas\Repositories;

use Sgpweb\Domains\Pessoas\Contracts\SecretarioTipoContract;
use Sgpweb\Domains\Pessoas\Models\SecretarioTipo;

class SecretarioTipoRepository implements SecretarioTipoContract
{
    /**
     * Cria variável para o construtor do secretarioTipo.
     *
     * @var string
     */
    private $secretarioTipo;

    /**
     * Função para injetar o objeto secretarioTipo.
     *
     * @var string
     */
    public function __construct(SecretarioTipo $secretarioTipo)
    {
        $this->secretarioTipo = $secretarioTipo;
    }

     /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->secretarioTipo->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->secretarioTipo->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->secretarioTipo->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute="id") {
        return $this->secretarioTipo->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->secretarioTipo->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->secretarioTipo->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->secretarioTipo->query()->where($attribute, '=', $value)->first($columns);
    }
    
     public function lists($columns, $key = 'id')
    {
        return $this->secretarioTipo->query()->pluck($columns, $key);
    }

    public function listsWhere($attribute, $value, $columns, $key = 'id')
    {
        return $this->secretarioTipo->query()->where($attribute, '=', $value)->pluck($columns, $key);
    }
}