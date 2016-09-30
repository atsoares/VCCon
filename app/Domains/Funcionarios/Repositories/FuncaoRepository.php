<?php

namespace VCCon\Domains\Funcionarios\Repositories;

use VCCon\Domains\Funcionarios\Contracts\FuncaoContract;
use VCCon\Domains\Funcionarios\Models\Funcao;

class FuncaoRepository implements FuncaoContract
{   

    /**
     * Cria variável para o construtor de funcao.
     *
     * @var string
     */
    private $funcao;

    /**
     * Função para injetar o objeto funcao.
     *
     * @var string
     */
    public function __construct(Funcao $funcao)
    {
        $this->funcao = $funcao;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->funcao->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->funcao->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->funcao->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute = 'id') {
        return $this->funcao->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->funcao->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->funcao->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->funcao->query()->where($attribute, '=', $value)->get($columns);
    }

    public function lists($columns, $key = 'id')
    {
        return $this->funcao->query()->pluck($columns, $key);
    }

    public function listsWhere($attribute, $value, $columns, $key = 'id')
    {
        return $this->funcao->query()->where($attribute, '=', $value)->pluck($columns, $key);
    }
}