<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBolsaValoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bolsa_valores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_creditos_id')->unsigned();
            $table->float('monto_minimo', 8, 2);
            $table->float('monto_maximo', 8, 2);
            $table->decimal('tasa_interes', 6,2);
            $table->string('plazo_minimo');
            $table->string('plazo_maximo');
            $table->decimal('porcentaje_mora', 6,2);
            $table->enum('tipo_interes', ['Fijo', 'Sobre_Saldos']);
            $table->integer('tipo_cobro_id')->unsigned();
            $table->timestamps();

            $table->foreign('tipo_creditos_id')->references('id')->on('tipo_creditos')->onDelete('cascade');
            $table->foreign('tipo_cobro_id')->references('id')->on('tipo_cobros')->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bolsa_valores');
    }
}
