<?php
namespace App\Repositories\Employee;

use App\Repositories\Repository;

class EmployeeRepository extends Repository {

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model() {
        return 'App\Models\Employee';
    }
}