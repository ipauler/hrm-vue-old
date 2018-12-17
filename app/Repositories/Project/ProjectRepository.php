<?php
namespace App\Repositories\Project;

use App\Repositories\Repository;

class ProjectRepository extends Repository {

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model() {
        return 'App\Models\Project';
    }
}