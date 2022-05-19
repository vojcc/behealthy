<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository {

    //zmienna przechowująca model
    protected $model;

    //metody które działają na modelach
    public function getAll($id, $columns = array('*')) {
        return $this->model->get($columns)->where('user_id', '=', $id);
        //zwróć wszystkie rekordy za pomocą funkcji get
    }

    public function create($data) {
        return $this->model->create($data);
        //przyjmij dane nowego rekordu i stwórz za pomocą create nowy rekord
    }

    public function find($id) {
        return $this->model->find($id);
        //przyjmij id i znajdź odpowiedni rekord
    }

    public function update($data, $id) {
        return $this->model->where('id', '=', $id)->update($data);
        //za parametr przyjmujemy listę data i parametr id do wyszukiwania - where(id = id z parametru), jeśli znajdziesz to zaktualizuj
    }

    public function delete($id) {
        return $this->model->destroy($id);
        //przyjmij id i zniszcz odpowiedni rekord
    }
}

