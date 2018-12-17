<?php

namespace App\Repositories;

interface RepositoryContract {

    public function all($columns = array('*'));

    public function paginate($perPage = 15, $columns = array('*'));

    public function create(array $data);

    public function update($model, $data);

    public function delete($model);

    public function find($id, $columns = array('*'));

    public function findBy($field, $value, $columns = array('*'));
}