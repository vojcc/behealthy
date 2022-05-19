<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Water extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function userWater() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
