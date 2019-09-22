<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLettersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('letters', function(Blueprint $table)
		{
			$table->bigIncrements('id', true);
			$table->text('content');
			$table->ipAddress('ip_address')->nullable();
			$table->dateTime('send_date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('letters');
	}

}
