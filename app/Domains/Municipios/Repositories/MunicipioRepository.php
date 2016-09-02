<?php

namespace Sgpweb\Domains\Municipios\Repositories;

use Sgpweb\Domains\Municipios\Contracts\MunicipioContract;
use Sgpweb\Domains\Municipios\Municipio;

class MunicipioRepository implements MunicipioContract
{   

    /**
     * Cria variável para o construtor de Municipios.
     *
     * @var string
     */
    private $municipio;

    /**
     * Função para injetar o objeto Municipios.
     *
     * @var string
     */
    public function __construct(Municipio $municipio)
    {
        $this->municipio = $municipio;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->municipio->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->municipio->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->municipio->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute="id") {
        return $this->municipio->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->municipio->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->municipio->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->municipio->query()->where($attribute, '=', $value)->first($columns);
    }
    
         public function lists($columns, $key = 'id')
    {
        return $this->municipio->query()->pluck($columns, $key);
    }

    public function listsWhere($attribute, $value, $columns, $key = 'id')
    {
        return $this->municipio->query()->where($attribute, '=', $value)->pluck($columns, $key);
    }
}