<?php

namespace App\Repositories;

use App\Models\Water;


class WaterRepository extends BaseRepository {

    public function __construct(Water $model) {
        $this->model = $model;
    }
}
