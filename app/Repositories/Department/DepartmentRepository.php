<?php
namespace App\Repositories\Department;

use App\Repositories\Repository;

class DepartmentRepository extends Repository {

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model() {
        return 'App\Models\Department';
    }
}