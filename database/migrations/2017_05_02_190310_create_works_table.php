<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('individual_id')->unsigned();//ojo
            $table->string('empresa');
            $table->string('direccion');
            $table->string('latitud');
            $table->string('longitud');
            $table->string('telefonos_empresa');
            $table->string('giro_negocio');
            $table->string('horario');
            $table->float('salario_mensual',8,2);
            $table->string('tipo_salario');
            $table->string('puesto');
            $table->datetime('fecha_inicio');
            $table->string('jefe_inmediato');
            $table->string('celular_jefe');
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
        Schema::dropIfExists('works');
    }
}
