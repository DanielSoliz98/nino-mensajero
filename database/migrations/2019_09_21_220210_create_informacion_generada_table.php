<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformacionGeneradaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('informacion_generada', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->text('contenido');
			$table->dateTime('fecha_creacion');
			$table->bigInteger('carta_id');
			$table->bigInteger('usuario_id');
			$table->bigInteger('boletin_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('informacion_generada');
	}

}
