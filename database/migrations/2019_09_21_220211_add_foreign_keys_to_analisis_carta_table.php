<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAnalisisCartaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('analisis_carta', function(Blueprint $table)
		{
			$table->foreign('carta_id', 'analisis_carta_carta_id_fkey')->references('id')->on('carta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipo_carta_id', 'analisis_carta_tipo_carta_id_fkey')->references('id')->on('tipo_carta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('analisis_carta', function(Blueprint $table)
		{
			$table->dropForeign('analisis_carta_carta_id_fkey');
			$table->dropForeign('analisis_carta_tipo_carta_id_fkey');
		});
	}

}
