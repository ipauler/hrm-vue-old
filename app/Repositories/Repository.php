<?php

namespace App\Repositories;

use App\Models\Department;
use App\Models\Project;
use Illuminate\Container\Container as App;
use Illuminate\Support\Facades\DB;

abstract class Repository implements RepositoryContract {

    /**
     * @var App
     */
    private $app;

    /**
     * @var
     */
    protected $model;

    /**
     * @param App $app
     */
    public function __construct(App $app) {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    abstract function model();

    /**
     * @param array $columns
     *
     * @return mixed
     */
    public function all($columns = array('*')) {
        //dd($this->model->get(['name']));
        return $this->model->get($columns);
    }

    /**
     * @param int $perPage
     * @param array $columns
     *
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = array('*')) {
        return $this->model->paginate($perPage, $columns);
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function create(array $data) {
        return $this->model->create($data);
    }

    /**
     * @param $model
     * @param  array $data
     *
     * @return mixed
     */
    public function update($model, $data) {
        $model->update($data);
        return $model;
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function delete($model) {
//        return $this->model->find($id)->destroy($id);
        return $model->delete();
    }

    /**
     * @param       $id
     * @param array $columns
     *
     * @return mixed
     */
    public function find($id, $columns = array('*')) {
        return $this->model->find($id, $columns);
    }

    /**
     * @param       $attribute
     * @param       $value
     * @param array $columns
     *
     * @return mixed
     */
    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function makeModel() {
        $model = $this->app->make($this->model());
        return $this->model = $model->newQuery();
    }
}