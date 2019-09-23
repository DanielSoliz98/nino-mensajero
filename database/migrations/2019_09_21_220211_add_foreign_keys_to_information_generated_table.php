<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInformationGeneratedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('information_generated', function(Blueprint $table)
		{
			$table->foreign('bulletin_id', 'information_generated_bulletin_id_fkey')->references('id')->on('bulletins')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('letter_id', 'information_generated_letter_id_fkey')->references('id')->on('letters')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'information_generated_user_id_fkey')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('information_generated', function(Blueprint $table)
		{
			$table->dropForeign('information_generated_bulletin_id_fkey');
			$table->dropForeign('information_generated_letter_id_fkey');
			$table->dropForeign('information_generated_user_id_fkey');
		});
	}

}
