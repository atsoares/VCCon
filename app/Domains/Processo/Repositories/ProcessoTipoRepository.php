<?php

namespace Sgpweb\Domains\Pessoas\Repositories;

use Sgpweb\Domains\Pessoas\Contracts\TipoPessoaContract;
use Sgpweb\Domains\Pessoas\TipoPessoa;

class TipoPessoaRepository implements TipoPessoaContract
{
    /**
     * Cria variável para o construtor do tipoPessoa.
     *
     * @var string
     */
    private $tipoPessoa;

    /**
     * Função para injetar o objeto tipoPessoa.
     *
     * @var string
     */
    public function __construct(TipoPessoa $tipoPessoa)
    {
        $this->tipoPessoa = $tipoPessoa;
    }


     /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->tipoPessoa->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->tipoPessoa->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->tipoPessoa->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute="id") {
        return $this->tipoPessoa->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->tipoPessoa->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->tipoPessoa->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->tipoPessoa->query()->where($attribute, '=', $value)->first($columns);
    }
}