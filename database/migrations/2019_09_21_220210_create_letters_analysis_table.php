<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLettersAnalysisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('letters_analysis', function(Blueprint $table)
		{
			$table->bigInteger('letter_id');
			$table->smallInteger('type_letter_id');
			$table->primary(['letter_id','type_letter_id'], 'letters_analysis_pkey')->unique();
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
		Schema::drop('letters_analysis');
	}

}
