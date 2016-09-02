<?php

namespace Sgpweb\Domains\Pessoas\Repositories;

use Sgpweb\Domains\Pessoas\Contracts\RelatorContract;
use Sgpweb\Domains\Pessoas\Models\Relator;

class RelatorRepository implements RelatorContract
{   

    /**
     * Cria variável para o construtor de Relator.
     *
     * @var string
     */
    private $relator;

    /**
     * Função para injetar o objeto Relator.
     *
     * @var string
     */
    public function __construct(Relator $relator)
    {
        $this->relator = $relator;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->relator->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->relator->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->relator->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute="id") {
        return $this->relator->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->relator->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->relator->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->relator->query()->where($attribute, '=', $value)->first($columns);
    }
}