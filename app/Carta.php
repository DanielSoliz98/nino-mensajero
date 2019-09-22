<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    protected $fillable = ['contenido', 'ip', 'fecha_envio'];
}
