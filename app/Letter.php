<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    protected $fillable = ['content', 'ip_address'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

}
