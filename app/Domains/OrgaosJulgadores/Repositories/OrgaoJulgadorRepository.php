<?php

namespace Sgpweb\Domains\OrgaosJulgadores\Repositories;

use Sgpweb\Domains\OrgaosJulgadores\Contracts\OrgaoJulgadorContract;
use Sgpweb\Domains\OrgaosJulgadores\OrgaoJulgador;

class OrgaoJulgadorRepository implements OrgaoJulgadorContract
{
    /**
     * Cria variável para o construtor do orgaoJulgador.
     *
     * @var string
     */
    private $orgaoJulgador;

    /**
     * Função para injetar o objeto orgaoJulgador.
     *
     * @var string
     */
    public function __construct(OrgaoJulgador $orgaoJulgador)
    {
        $this->orgaoJulgador = $orgaoJulgador;
    }


     /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->orgaoJulgador->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->orgaoJulgador->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->orgaoJulgador->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute="id") {
        return $this->orgaoJulgador->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->orgaoJulgador->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->orgaoJulgador->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->orgaoJulgador->query()->where($attribute, '=', $value)->first($columns);
    }
}