<?php

namespace VCCon\Domains\Reunioes\Repositories;

use VCCon\Domains\Reunioes\Contracts\ReuniaoContract;
use VCCon\Domains\Reunioes\Models\Reuniao;

class ReuniaoRepository implements ReuniaoContract
{   

    /**
     * Cria variável para o construtor de Reuniao.
     *
     * @var string
     */
    private $reuniao;

    /**
     * Função para injetar o objeto Reuniao.
     *
     * @var string
     */
    public function __construct(Reuniao $reuniao)
    {
        $this->reuniao = $reuniao;
    }

    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'))
    {
        return $this->reuniao->query()->orderBy('horario_inicio')->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->reuniao->query()->orderBy('horario_inicio')->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->reuniao->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute = 'id') {
        return $this->reuniao->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->reuniao->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->reuniao->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->reuniao->query()->where($attribute, '=', $value)->first($columns);
    }

    public function lists($columns, $key = 'id')
    {
        return $this->reuniao->query()->pluck($columns, $key);
    }

    public function listsWhere($attribute, $value, $columns, $key = 'id')
    {
        return $this->reuniao->query()->where($attribute, '=', $value)->pluck($columns, $key);
    }
}