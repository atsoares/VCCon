<?php

namespace Sgpweb\Domains\LrfProcessos\Repositories;

use Sgpweb\Domains\LrfProcessos\Contracts\LrfDataContract;
use Sgpweb\Domains\LrfProcessos\Models\LrfData;

class LrfDataRepository implements LrfDataContract
{
    private $lrfData;

    public function __construct(LrfData $lrfData)
    {
        $this->lrfData = $lrfData;
    }

    public function all($columns = array('*'))
    {
        return $this->lrfData->query()->get($columns);
    }

    public function paginate($perPage = 10, $columns = array('*'))
    {
        return $this->lrfData->query()->paginate($perPage, $columns);
    }

    public function store(array $data) {
        return $this->lrfData->query()->firstOrCreate($data);
    }

    public function update(array $data, $id, $attribute="id") {
        return $this->lrfData->query()->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->lrfData->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->lrfData->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->lrfData->query()->where($attribute, '=', $value)->first($columns);
    }
}