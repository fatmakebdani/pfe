<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offrees', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->enum('statut', ['libre', 'en cours_examen','attribuée']);
             $table->integer('ficheE_id')->unsigned();
             $table->foreign('ficheE_id')->references('id')->on('fichees');
              $table->integer('prof_id')->unsigned();
             $table->foreign('prof_id')->references('id')->on('professionnels');
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
        Schema::dropIfExists('offrees');
    }
}
