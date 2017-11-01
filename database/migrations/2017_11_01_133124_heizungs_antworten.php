<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HeizungsAntworten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('heizungs_antworten', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('heizungs_fragen_id')->unsigned();
        $table->foreign('heizungs_fragen_id')->references('id')->on('heizungs_fragen');
        $table->string('antwort');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heizungs_antworten');
    }
}
