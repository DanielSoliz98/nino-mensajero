<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpecialistsSpecialtiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('specialists_specialties', function(Blueprint $table)
		{
			$table->bigInteger('specialist_user_id');
			$table->integer('specialty_id');
			$table->primary(['specialist_user_id','specialty_id'], 'specialist_specialty_pkey')->unique();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('specialists_specialties');
	}

}
