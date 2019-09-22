<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnalisisCartasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('analisis_cartas', function(Blueprint $table)
		{
			$table->bigInteger('carta_id');
			$table->smallInteger('tipo_carta_id');
			$table->primary(['carta_id','tipo_carta_id'], 'analisis_carta_pkey')->unique();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('analisis_cartas');
	}

}
