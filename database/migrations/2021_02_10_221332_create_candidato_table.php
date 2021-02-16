<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cedula_candidato')->unsigned();
            $table->string('nombre',50);
            $table->string('foto', 100);   // Varchar 100
            $table->bigInteger('cod_candidato')->unsigned();
            $table->foreign('cod_candidato')  //Creación de la llave foranea
                  ->references('id')
                  ->on('votos')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('candidato');
    }
}
