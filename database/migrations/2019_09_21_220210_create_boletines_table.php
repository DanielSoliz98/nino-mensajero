<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoletinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('boletines', function(Blueprint $table)
		{
			$table->bigIncrements('id', true);
			$table->string('nombre', 50);
			$table->dateTime('fecha_creacion');
			$table->date('fecha_publicacion')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('boletines');
	}

}
