<?php

namespace App;

use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    protected $fillable = ['content', 'ip_address', 'type_letter_id'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function getCreatedAtAttribute($date)
    {
        return new Date($date);
    }

    public function typeLetter()
    {
        return $this->belongsTo(TypesLetter::class);
    }
    
    public function generatedInformations()
    {
        return $this->hasMany(GeneratedInformation::class, 'letter_id', 'id');
    }
}
