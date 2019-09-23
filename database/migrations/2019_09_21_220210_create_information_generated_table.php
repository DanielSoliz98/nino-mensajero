<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformationGeneratedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('information_generated', function(Blueprint $table)
		{
			$table->bigIncrements('id', true);
			$table->text('content');
			$table->timestamps();
			$table->bigInteger('letter_id');
			$table->bigInteger('user_id');
			$table->bigInteger('bulletin_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('information_generated');
	}

}
