<?php

namespace Sgpweb\Domains\Processo\Repositories;

use Sgpweb\Domains\Processo\Contracts\ProcessoCategoriasContract;
use Sgpweb\Domains\Processo\ProcessoCategorias;

class ProcessoCategoriasRepository implements ProcessoCategoriasContract
{   

    /**
     * Cria variável para o construtor de Pessoa.
     *
     * @var string
     */
    private $processo_categorias;

    /**
     * Função para injetar o objeto Pessoa.
     *
     * @var string
     */
    public function __construct(ProcessoCategorias $ProcessoCategorias)
    {
        $this->processo_categorias = $ProcessoCategorias;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->processo_categorias->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->processo_categorias->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->processo_categorias->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute="id") {
        return $this->processo_categorias->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->processo_categorias->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->processo_categorias->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->processo_categorias->query()->where($attribute, '=', $value)->first($columns);
    }
}