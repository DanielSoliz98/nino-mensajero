<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBulletinsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bulletins', function(Blueprint $table)
		{
			$table->bigIncrements('id', true);
			$table->string('name', 50);
			$table->string('description', 200);
			$table->date('publication_date');
			$table->boolean('is_published');
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
		Schema::drop('bulletins');
	}

}
