<?php

namespace VCCon\Domains\Condominos\Repositories;

use VCCon\Domains\Condominos\Contracts\ContatoCondominoContract;
use VCCon\Domains\Condominos\Models\ContatoCondomino;

class ContatoCondominoRepository implements ContatoCondominoContract
{   

    /**
     * Cria variável para o construtor de carro Condomino.
     *
     * @var string
     */
    private $contatoCondomino;

    /**
     * Função para injetar o objeto Condomino.
     *
     * @var string
     */
    public function __construct(ContatoCondomino $contatoCondomino)
    {
        $this->contatoCondomino = $contatoCondomino;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->contatoCondomino->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->contatoCondomino->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->contatoCondomino->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute = 'id') {
        return $this->contatoCondomino->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->contatoCondomino->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->contatoCondomino->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->contatoCondomino->query()->where($attribute, '=', $value)->get($columns);
    }

    public function lists($columns, $key = 'id')
    {
        return $this->contatoCondomino->query()->pluck($columns, $key);
    }

    public function listsWhere($attribute, $value, $columns, $key = 'id')
    {
        return $this->contatoCondomino->query()->where($attribute, '=', $value)->pluck($columns, $key);
    }
}