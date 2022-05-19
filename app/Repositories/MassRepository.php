<?php

namespace App\Repositories;

use App\Models\Mass;


class MassRepository extends BaseRepository {

    public function __construct(Mass $model) {
        $this->model = $model;
    }
}
