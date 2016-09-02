<?php

namespace Sgpweb\Domains\Pessoas\Repositories;

use Sgpweb\Domains\Pessoas\Contracts\SecretarioContract;
use Sgpweb\Domains\Pessoas\Models\Secretario;

class SecretarioRepository implements SecretarioContract
{   

    /**
     * Cria variável para o construtor de Secretario.
     *
     * @var string
     */
    private $secretario;

    /**
     * Função para injetar o objeto Secretario.
     *
     * @var string
     */
    public function __construct(Secretario $secretario)
    {
        $this->secretario = $secretario;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->secretario->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->secretario->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->secretario->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute="id") {
        return $this->secretario->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->secretario->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->secretario->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->secretario->query()->where($attribute, '=', $value)->first($columns);
    }
}