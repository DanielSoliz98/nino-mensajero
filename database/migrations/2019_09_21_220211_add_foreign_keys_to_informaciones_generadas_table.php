<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInformacionesGeneradasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('informaciones_generadas', function(Blueprint $table)
		{
			$table->foreign('boletin_id', 'informacion_generada_boletin_id_fkey')->references('id')->on('boletines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('carta_id', 'informacion_generada_carta_id_fkey')->references('id')->on('cartas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('usuario_id', 'informacion_generada_usuario_id_fkey')->references('id')->on('usuarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('informaciones_generadas', function(Blueprint $table)
		{
			$table->dropForeign('informacion_generada_boletin_id_fkey');
			$table->dropForeign('informacion_generada_carta_id_fkey');
			$table->dropForeign('informacion_generada_usuario_id_fkey');
		});
	}

}
