<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $fillable = ['user_id', 'profession', 'degree', 'skills', 'experience'];

    public function specialist(){
        return $this->belongsTo(User::class, 'user_id');
    }

    
}
