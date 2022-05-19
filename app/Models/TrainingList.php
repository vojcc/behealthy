<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingList extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function trainingList() {
        return $this->belongsTo(Training::class, 'training_list_id');
    }
}
