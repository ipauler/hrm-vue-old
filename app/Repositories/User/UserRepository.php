<?php
namespace App\Repositories\User;

use App\Repositories\Repository;

class UserRepository extends Repository {

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model() {
        return 'App\Models\User';
    }
}