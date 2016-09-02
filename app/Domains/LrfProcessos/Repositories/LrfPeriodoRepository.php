<?php

namespace Sgpweb\Domains\LrfProcessos\Repositories;

use Sgpweb\Domains\LrfProcessos\Contracts\LrfPeriodoContract;
use Sgpweb\Domains\LrfProcessos\Models\LrfPeriodo;

class LrfPeriodoRepository implements LrfPeriodoContract
{
    private $lrfPeriodo;

    public function __construct(LrfPeriodo $lrfPeriodo)
    {
        $this->lrfPeriodo = $lrfPeriodo;
    }

    public function all($columns = array('*'))
    {
        return $this->lrfPeriodo->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->lrfPeriodo->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->lrfPeriodo->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute = 'id') {
        return $this->lrfPeriodo->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->lrfPeriodo->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->lrfPeriodo->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->lrfPeriodo->query()->where($attribute, '=', $value)->first($columns);
    }

    public function lists($value, $key = 'id')
    {
        return $this->lrfPeriodo->query()->pluck($value, $key);
    }

    public function listsWhere($attribute, $value, $column, $key = 'id')
    {
        return $this->lrfPeriodo->query()->where($attribute, '=', $value)->pluck($column, $key);
    }
}