<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSpecialistsSpecialtiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('specialists_specialties', function(Blueprint $table)
		{
			$table->foreign('specialist_user_id', 'specialists_specialties_specialist_user_id_fkey')
				  ->references('user_id')->on('specialists')
				  ->onUpdate('RESTRICT')
				  ->onDelete('RESTRICT');
			$table->foreign('specialty_id', 'specialists_specialties_specialty_id_fkey')
				  ->references('id')->on('specialties')
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
		Schema::table('specialists_specialties', function(Blueprint $table)
		{
			$table->dropForeign('specialists_specialties_specialist_user_id_fkey');
			$table->dropForeign('specialists_specialties_specialty_id_fkey');
		});
	}

}
