<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialCreditoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_creditos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contract_id')->unsigned();
            $table->datetime('fecha_pago');
            $table->float('cargo_capital',8,2);
            $table->float('cargo_intereses', 8,2);
            $table->float('abono_capital', 8,2);
            $table->float('abono_intereses', 8,2);
            $table->integer('dias_mora');
            $table->float('saldo_capital');
            $table->timestamps();

            $table->foreign('contract_id')->references('id')->on('contracts')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_creditos');
    }
}
