<?php

namespace App\Repositories;

use App\Models\Training;


class TrainingRepository extends BaseRepository {

    public function __construct(Training $model) {
        $this->model = $model;
    }

}
