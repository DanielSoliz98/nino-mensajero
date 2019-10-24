<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpecialistsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('specialists', function(Blueprint $table)
		{
			$table->bigInteger('user_id')->primary('specialist_pkey');
			$table->string('ci', 10);
            $table->string('phone', 8);
			$table->string('profession', 20);
			$table->string('degree', 20);
			$table->string('specialties', 100);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('specialists');
	}

}
