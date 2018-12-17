<?php
namespace app\Repositories\Vacancy;

use App\Repositories\Repository;

class VacancyRepository extends Repository {

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model() {
        return 'App\Models\Vacancy';
    }
}