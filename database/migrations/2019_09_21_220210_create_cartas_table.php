<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cartas', function(Blueprint $table)
		{
			$table->bigIncrements('id', true);
			$table->text('contenido');
			$table->ipAddress('ip')->nullable();
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
		Schema::drop('cartas');
	}

}
