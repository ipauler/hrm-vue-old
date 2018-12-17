<?php
namespace app\Repositories\Social;

use App\Repositories\Repository;

class SocialRepository extends Repository {

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model() {
        return 'App\Models\Social';
    }
}