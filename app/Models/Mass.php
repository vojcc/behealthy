<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mass extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function userMass() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
