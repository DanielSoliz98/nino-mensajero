<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLetterAnalysisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('letters_analysis', function(Blueprint $table)
		{
			$table->foreign('letter_id', 'letters_analysis_letter_id_fkey')->references('id')->on('letters')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('type_letter_id', 'letters_analysis_type_letter_id_fkey')->references('id')->on('types_letters')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('letters_analysis', function(Blueprint $table)
		{
			$table->dropForeign('letters_analysis_letter_id_fkey');
			$table->dropForeign('letters_analysis_type_letter_id_fkey');
		});
	}

}
