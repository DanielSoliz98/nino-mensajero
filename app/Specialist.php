<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $fillable = ['id', 'ci', 'phone', 'profession', 'degree', 'specialties'];

    public function specialist()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
