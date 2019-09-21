<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEspecialistaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('especialista', function(Blueprint $table)
		{
			$table->foreign('usuario_id', 'especialista_usuario_id_fkey')->references('id')->on('usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('especialista', function(Blueprint $table)
		{
			$table->dropForeign('especialista_usuario_id_fkey');
		});
	}

}
