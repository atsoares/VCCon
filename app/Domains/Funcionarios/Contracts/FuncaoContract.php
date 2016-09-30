<?php

namespace VCCon\Domains\Funcionarios\Contracts;

interface FuncaoContract
{
    /**
     * Consultas ao DB.
     *
     * @var array
     */
    public function all($columns = array('*'));

    public function paginate($perPage = 10, $columns = array('*'));

    public function store(array $data);

    public function update(array $data, $id, $attribute="id");

    public function delete($id);

    public function find($id, $columns = array('*'));

    public function findBy($attribute, $value, $columns = array('*'));

    public function lists($columns, $key = 'id');

    public function listsWhere($attribute, $value, $columns, $key = 'id');
}