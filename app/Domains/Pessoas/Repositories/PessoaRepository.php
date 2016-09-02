<?php

namespace Sgpweb\Domains\Pessoas\Repositories;

use Sgpweb\Domains\Pessoas\Contracts\PessoaContract;
use Sgpweb\Domains\Pessoas\Models\Pessoa;

class PessoaRepository implements PessoaContract
{   

    /**
     * Cria variável para o construtor de Pessoa.
     *
     * @var string
     */
    private $pessoa;

    /**
     * Função para injetar o objeto Pessoa.
     *
     * @var string
     */
    public function __construct(Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->pessoa->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->pessoa->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->pessoa->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute = 'id') {
        return $this->pessoa->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->pessoa->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->pessoa->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->pessoa->query()->where($attribute, '=', $value)->first($columns);
    }

    public function lists($columns, $key = 'id')
    {
        return $this->pessoa->query()->pluck($columns, $key);
    }

    public function listsWhere($attribute, $value, $columns, $key = 'id')
    {
        return $this->pessoa->query()->where($attribute, '=', $value)->pluck($columns, $key);
    }
}