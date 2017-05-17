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
            $table->string('descripcion');
            $table->float('monto_minimo', 8, 2);
            $table->float('monto_maximo', 8, 2);
            $table->char('tasa_interes', 4);
            $table->char('plazo_maximo', 15);
            $table->char('plazo_minimo', 15);
            $table->char('porcentaje_mora', 4);
            $table->enum('tipo_interes', ['Fijo', 'Sobre Saldos']);
            $table->enum('tipo_cobro', ['Diario', 'Semanal', 'Quincenal', 'Mensual', 'Prendario', 'Hipotecario', 'Bancario']);
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
        Schema::dropIfExists('credits');
    }
}
