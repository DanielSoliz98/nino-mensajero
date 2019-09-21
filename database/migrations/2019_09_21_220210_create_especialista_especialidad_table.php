<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEspecialistaEspecialidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('especialista_especialidad', function(Blueprint $table)
		{
			$table->bigInteger('especialista_usuario_id');
			$table->integer('especialidad_id');
			$table->primary(['especialista_usuario_id','especialidad_id'], 'especialista_especialidad_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('especialista_especialidad');
	}

}
