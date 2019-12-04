<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGeneratedInformationsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('generated_informations', function (Blueprint $table) {
			$table->bigIncrements('id', true);
			$table->text('content');
			$table->timestamps();
			$table->bigInteger('letter_id')->unsigned()->index();
			$table->bigInteger('user_id')->unsigned()->index();
			$table->bigInteger('bulletin_id')->unsigned()->index()->nullable();
			$table->index('letter_id', 'user_id');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('generated_informations');
	}
}