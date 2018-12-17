<?php

namespace App\Repositories\Stage;

use App\Repositories\Repository;

class StageRepository extends Repository {

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model() {
        return 'App\Models\Stage';
    }
}