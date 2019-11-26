<?php

use Illuminate\Database\Seeder;
use App\TypesLetter;

class TypesLettersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $danger = TypesLetter::create(['name' => 'peligro']);
        $urgent = TypesLetter::create(['name' => 'urgente']);
        $alert = TypesLetter::create(['name' => 'alerta']);
        $normal = TypesLetter::create(['name' => 'normal']);
    }
}
