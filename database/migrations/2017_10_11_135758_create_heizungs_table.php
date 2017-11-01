<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeizungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heizungs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('baustelle')->nullable();
            $table->string('gebaeudetyp')->nullable();
            $table->string('baujahr')->nullable();
            $table->string('bestehendeheizung')->nullable();
            $table->string('gewuenschteheizung')->nullable();
            $table->string('alterheizung')->nullable();
            $table->string('brennstoffverbrauch')->nullable();
            $table->string('energienachweis')->nullable();
            $table->string('wohnflaeche')->nullable();
            $table->string('waermeabgabe')->nullable();
            $table->string('abgasfuehrung')->nullable();
            $table->string('warmwasser')->nullable();
            $table->string('abwasseranschluss')->nullable();
            $table->string('baugesuch')->nullable();
            $table->string('kommentar')->nullable();
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
        Schema::dropIfExists('heizungs');
    }
}
