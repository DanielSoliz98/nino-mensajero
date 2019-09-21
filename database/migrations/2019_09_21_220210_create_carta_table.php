<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carta', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->text('contenido');
			$table->string('ip', 15)->nullable();
			$table->dateTime('fecha_envio');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('carta');
	}

}
