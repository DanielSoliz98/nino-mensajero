<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['filename', 'letter_id'];

    public function letter(){
        return $this->belongsTo(Letter::class);
    }
    
}