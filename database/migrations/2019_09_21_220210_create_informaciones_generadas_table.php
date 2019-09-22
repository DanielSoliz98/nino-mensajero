<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformacionesGeneradasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('informaciones_generadas', function(Blueprint $table)
		{
			$table->bigIncrements('id', true);
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
		Schema::drop('informaciones_generadas');
	}

}
