<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGeneratedInformationsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('generated_informations', function (Blueprint $table) {
			$table->foreign('bulletin_id', 'generated_informations_bulletin_id_fkey')
				->references('id')->on('bulletins')
				->onUpdate('RESTRICT')
				->onDelete('RESTRICT');
			$table->foreign('letter_id', 'generated_informations_letter_id_fkey')
				->references('id')->on('letters')
				->onUpdate('RESTRICT')
				->onDelete('RESTRICT');
			$table->foreign('user_id', 'generated_informations_user_id_fkey')
				->references('id')->on('users')
				->onUpdate('RESTRICT')
				->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('generated_informations', function (Blueprint $table) {
			$table->dropForeign('generated_informations_bulletin_id_fkey');
			$table->dropForeign('generated_informations_letter_id_fkey');
			$table->dropForeign('generated_informations_user_id_fkey');
		});
	}
}
