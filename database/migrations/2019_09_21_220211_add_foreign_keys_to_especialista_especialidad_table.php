<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEspecialistaEspecialidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('especialista_especialidad', function(Blueprint $table)
		{
			$table->foreign('especialidad_id', 'especialista_especialidad_especialidad_id_fkey')->references('id')->on('especialidad')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('especialista_usuario_id', 'especialista_especialidad_especialista_usuario_id_fkey')->references('usuario_id')->on('especialista')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('especialista_especialidad', function(Blueprint $table)
		{
			$table->dropForeign('especialista_especialidad_especialidad_id_fkey');
			$table->dropForeign('especialista_especialidad_especialista_usuario_id_fkey');
		});
	}

}
