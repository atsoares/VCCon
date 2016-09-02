<?php

namespace VCCon\Domains\Unidades\Repositories;

use VCCon\Domains\Unidades\Contracts\UnidadeContract;
use VCCon\Domains\Unidades\Models\Unidade;

class UnidadeRepository implements UnidadeContract
{   

    /**
     * Cria variável para o construtor de Unidade.
     *
     * @var string
     */
    private $unidade;

    /**
     * Função para injetar o objeto Unidade.
     *
     * @var string
     */
    public function __construct(Unidade $unidade)
    {
        $this->unidade = $unidade;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->unidade->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->unidade->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->unidade->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute = 'id') {
        return $this->unidade->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->unidade->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->unidade->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->unidade->query()->where($attribute, '=', $value)->first($columns);
    }

    public function lists($columns, $key = 'id')
    {
        return $this->unidade->query()->pluck($columns, $key);
    }

    public function listsWhere($attribute, $value, $columns, $key = 'id')
    {
        return $this->unidade->query()->where($attribute, '=', $value)->pluck($columns, $key);
    }
}