<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSpecialistsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('specialists', function(Blueprint $table)
		{
			$table->foreign('id', 'specialist_user_id_fkey')
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
		Schema::table('specialists', function(Blueprint $table)
		{
			$table->dropForeign('specialist_user_id_fkey');
		});
	}

}
