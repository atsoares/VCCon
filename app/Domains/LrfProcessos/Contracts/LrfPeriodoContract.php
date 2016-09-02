<?php

namespace Sgpweb\Domains\LrfProcessos\Contracts;

interface LrfPeriodoContract
{
    public function all($columns = array('*'));

    public function paginate($perPage = 10, $columns = array('*'));

    public function store(array $data);

    public function update(array $data, $id, $attribute="id");

    public function delete($id);

    public function find($id, $columns = array('*'));

    public function findBy($attribute, $value, $columns = array('*'));

    public function lists($value, $key = 'id');

    public function listsWhere($attribute, $value, $column, $key = 'id');
}