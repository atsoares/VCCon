<?php

namespace Sgpweb\Domains\Processos\Repositories;

use Sgpweb\Domains\Processos\Contracts\TipoEntidadeContract;
use Sgpweb\Domains\Processos\TipoEntidade;

class TipoEntidadeRepository implements TipoEntidadeContract
{
    /**
     * Cria variável para o construtor do tipoEntidade.
     *
     * @var string
     */
    private $tipoEntidade;

    /**
     * Função para injetar o objeto tipoEntidade.
     *
     * @var string
     */
    public function __construct(TipoEntidade $tipoEntidade)
    {
        $this->tipoEntidade = $tipoEntidade;
    }


     /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->tipoEntidade->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->tipoEntidade->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->tipoEntidade->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute="id") {
        return $this->tipoEntidade->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->tipoEntidade->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->tipoEntidade->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->tipoEntidade->query()->where($attribute, '=', $value)->first($columns);
    }
}