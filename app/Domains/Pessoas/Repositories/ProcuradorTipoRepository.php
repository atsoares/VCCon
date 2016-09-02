<?php

namespace Sgpweb\Domains\Pessoas\Repositories;

use Sgpweb\Domains\Pessoas\Contracts\ProcuradorTipoContract;
use Sgpweb\Domains\Pessoas\Models\ProcuradorTipo;

class ProcuradorTipoRepository implements ProcuradorTipoContract
{
    /**
     * Cria variável para o construtor do procuradorTipo.
     *
     * @var string
     */
    private $procuradorTipo;

    /**
     * Função para injetar o objeto procuradorTipo.
     *
     * @var string
     */
    public function __construct(ProcuradorTipo $procuradorTipo)
    {
        $this->procuradorTipo = $procuradorTipo;
    }

     /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->procuradorTipo->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->procuradorTipo->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->procuradorTipo->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute="id") {
        return $this->procuradorTipo->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->procuradorTipo->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->procuradorTipo->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->procuradorTipo->query()->where($attribute, '=', $value)->first($columns);
    }

     public function lists($columns, $key = 'id')
    {
        return $this->procuradorTipo->query()->pluck($columns, $key);
    }

    public function listsWhere($attribute, $value, $columns, $key = 'id')
    {
        return $this->procuradorTipo->query()->where($attribute, '=', $value)->pluck($columns, $key);
    }
}