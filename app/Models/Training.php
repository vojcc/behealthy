<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    public $timestamps = false;


    public function userTraining() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function trainingList() {
        //relacje jeden do wielu
        //Training będzie posiadał wiele ćwiczeń, punkt złączenia to:
        return $this->hasMany(TrainingList::class, 'training_list_id');
    }

}
