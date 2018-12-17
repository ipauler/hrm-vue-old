<?php

namespace App\Repositories\Profile;

use App\Models\Employee;
use App\Repositories\Repository;

class ProfileRepository extends Repository {

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model() {
        return 'App\Models\Profile';
    }

    public function allManagers($columns = array('*')) {
        return $this->model->where('profileable_type', Employee::class)->get($columns);
    }
}