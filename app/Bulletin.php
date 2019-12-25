<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulletin extends Model
{
    protected $fillable = ['name', 'description', 'publication_date'];

    public function generatedInformations()
    {
        return $this->hasMany(GeneratedInformation::class);
    }
}
