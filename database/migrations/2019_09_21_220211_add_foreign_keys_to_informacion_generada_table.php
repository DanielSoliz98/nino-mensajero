<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInformacionGeneradaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('informacion_generada', function(Blueprint $table)
		{
			$table->foreign('boletin_id', 'informacion_generada_boletin_id_fkey')->references('id')->on('boletin')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('carta_id', 'informacion_generada_carta_id_fkey')->references('id')->on('carta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('usuario_id', 'informacion_generada_usuario_id_fkey')->references('id')->on('usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('informacion_generada', function(Blueprint $table)
		{
			$table->dropForeign('informacion_generada_boletin_id_fkey');
			$table->dropForeign('informacion_generada_carta_id_fkey');
			$table->dropForeign('informacion_generada_usuario_id_fkey');
		});
	}

}
