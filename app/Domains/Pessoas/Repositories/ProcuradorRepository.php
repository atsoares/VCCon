<?php

namespace Sgpweb\Domains\Pessoas\Repositories;

use Sgpweb\Domains\Pessoas\Contracts\ProcuradorContract;
use Sgpweb\Domains\Pessoas\Models\Procurador;

class ProcuradorRepository implements ProcuradorContract
{   

    /**
     * Cria variável para o construtor de Procurador.
     *
     * @var string
     */
    private $procurador;

    /**
     * Função para injetar o objeto Procurador.
     *
     * @var string
     */
    public function __construct(Procurador $procurador)
    {
        $this->procurador = $procurador;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->procurador->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->procurador->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->procurador->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute="id") {
        return $this->procurador->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->procurador->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->procurador->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->procurador->query()->where($attribute, '=', $value)->first($columns);
    }
}