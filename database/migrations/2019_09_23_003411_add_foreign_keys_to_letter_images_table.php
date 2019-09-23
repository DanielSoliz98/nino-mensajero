<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToLetterImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('letter_images', function (Blueprint $table) {
            $table->foreign('letter_id', 'letter_images_letter_id_fkey')->references('id')->on('letters')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('letter_images', function (Blueprint $table) {
            $table->dropForeign('letter_images_letter_id_fkey');
        });
    }
}
