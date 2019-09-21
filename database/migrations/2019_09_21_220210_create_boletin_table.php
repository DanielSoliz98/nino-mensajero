<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoletinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('boletin', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('nombre');
			$table->date('fecha_creacion');
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
		Schema::drop('boletin');
	}

}
