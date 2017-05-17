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
            $table->char('empresa', 50);
            $table->char('direccion', 50);
            $table->char('telefonos_empresa', 24);
            $table->char('puesto', 40);
            $table->char('tiempo_servicio', 2);
            $table->char('jefe_inmediato', 60);
            $table->timestamps();

            $table->foreign('individual_id')->references('id')->on('individuals')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
