<?php

namespace App\Repositories;

use App\Models\TrainingList;


class TrainingListRepository extends BaseRepository {

    public function __construct(TrainingList $model) {
        $this->model = $model;
    }

    public function getTrainingList($columns = array('*')) {
        return $this->model->get($columns);
        //zwróć wszystkie rekordy za pomocą funkcji get
    }

    public function getName($id) {
        return $this->model->where('id', $id)->get('name');
        //zwróć wszystkie rekordy za pomocą funkcji get
    }
}
