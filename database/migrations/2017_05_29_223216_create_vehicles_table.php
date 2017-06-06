<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('vehicles', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('individual_id')->unsigned();//ojo
          $table->string('tipo_vehiculo');
          $table->string('marca');
          $table->integer('modelo');
          $table->string('linea');
          $table->string('color');
          $table->char('tipo_placa', 1);
          $table->string('placa');
          $table->float('valor_vehiculo', 8,2);
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
        Schema::dropIfExists('vehicles');
    }
}
