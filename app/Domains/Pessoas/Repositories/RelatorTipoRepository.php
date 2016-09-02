<?php

namespace Sgpweb\Domains\Pessoas\Repositories;

use Sgpweb\Domains\Pessoas\Contracts\RelatorTipoContract;
use Sgpweb\Domains\Pessoas\Models\RelatorTipo;

class RelatorTipoRepository implements RelatorTipoContract
{
    /**
     * Cria variável para o construtor do relatorTipo.
     *
     * @var string
     */
    private $relatorTipo;

    /**
     * Função para injetar o objeto relatorTipo.
     *
     * @var string
     */
    public function __construct(RelatorTipo $relatorTipo)
    {
        $this->relatorTipo = $relatorTipo;
    }

     /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->relatorTipo->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->relatorTipo->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->relatorTipo->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute="id") {
        return $this->relatorTipo->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->relatorTipo->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->relatorTipo->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->relatorTipo->query()->where($attribute, '=', $value)->first($columns);
    }

     public function lists($columns, $key = 'id')
    {
        return $this->relatorTipo->query()->pluck($columns, $key);
    }

    public function listsWhere($attribute, $value, $columns, $key = 'id')
    {
        return $this->relatorTipo->query()->where($attribute, '=', $value)->pluck($columns, $key);
    }
}