<?php

namespace VCCon\Domains\Funcionarios\Repositories;

use VCCon\Domains\Funcionarios\Contracts\FuncionarioContract;
use VCCon\Domains\Funcionarios\Models\Funcionario;

class FuncionarioRepository implements FuncionarioContract
{   

    /**
     * Cria variável para o construtor de Funcionario.
     *
     * @var string
     */
    private $funcionario;

    /**
     * Função para injetar o objeto Funcionario.
     *
     * @var string
     */
    public function __construct(Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->funcionario->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->funcionario->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->funcionario->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute = 'id') {
        return $this->funcionario->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->funcionario->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->funcionario->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->funcionario->query()->where($attribute, '=', $value)->get($columns);
    }

    public function lists($columns, $key = 'id')
    {
        return $this->funcionario->query()->pluck($columns, $key);
    }

    public function listsWhere($attribute, $value, $columns, $key = 'id')
    {
        return $this->funcionario->query()->where($attribute, '=', $value)->pluck($columns, $key);
    }
}