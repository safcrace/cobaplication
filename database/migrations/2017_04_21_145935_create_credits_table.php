<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('payment_id')->unsigned();
            $table->string('descripcion');
            $table->float('monto_minimo', 8, 2);
            $table->float('monto_maximo', 8, 2);
            $table->decimal('tasa_interes', 6,2);
            $table->integer('cantidad_plazo_minimo');
            $table->integer('minimo_time_id')->unsigned();
            $table->integer('cantidad_plazo_maximo');
            $table->integer('maximo_time_id')->unsigned();
            $table->decimal('porcentaje_mora', 6,2);
            $table->integer('interest_id')->unsigned();
            $table->timestamps();

            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
            $table->foreign('interest_id')->references('id')->on('interests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credits');
    }
}
