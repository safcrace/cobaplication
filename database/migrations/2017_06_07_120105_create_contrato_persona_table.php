<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratoPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_persona', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('contrato_id')->unsigned();
          $table->integer('persona_id')->unsigned();
          $table->integer('tipo_referencia_id')->unsigned()->nullable();
          $table->timestamps();

          $table->foreign('contrato_id')
                ->references('id')
                ->on('contratos');

          $table->foreign('persona_id')
                ->references('id')
                ->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrato_persona');
    }
}
