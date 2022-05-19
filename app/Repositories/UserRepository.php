<?php

namespace App\Repositories;

use App\Models\User;


class UserRepository extends BaseRepository {

    //wstrzykiwanie zależności
    public function __construct(User $model) {
        //dzięki dziedziczeniu można korzystać z metod z BaseRepository dla konkretnego modelu
        $this->model = $model;
    }
}
