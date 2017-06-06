<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('deals', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('individual_id')->unsigned();//ojo
          $table->string('empresa');
          $table->string('direccion');
          $table->integer('latitud');
          $table->integer('longitud');
          $table->string('telefono_negocio');
          $table->string('giro_negocio');
          $table->string('horario');
          $table->datetime('fecha_inicio');
          $table->float('ingresos_promedio',8,2);
          $table->string('patente');
          $table->string('nombre_encargado');
          $table->string('celular_encargado');
          $table->timestamps();

          $table->foreign('individual_id')->references('id')->on('individuals');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deals');
    }
}
