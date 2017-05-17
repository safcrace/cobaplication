<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('credit_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->float('monto_solicitado', 8,2);
            $table->float('monto_otorgado', 8,2);
            $table->char('tasa_interes',4);
            $table->char('tasa_mora', 4);
            $table->enum('tipo_interes', ['Fijo', 'Sobre Saldos']);
            $table->enum('tipo_cobro', ['Diario', 'Semanal', 'Quincenal', 'Mensual', 'Prendario', 'Hipotecario', 'Bancario']);
            $table->float('cuota', 8,2);
            $table->char('numero_cuotas', 2);
            $table->date('fecha_solicitud');
            $table->integer('codigo_usuario_solicito');
            $table->date('fecha_aprobacion');
            $table->integer('codigo_usuario_aprobo');
            $table->date('fecha_entrega');
            $table->integer('codigo_usuario_entrego');
            $table->date('fecha_rechazo');
            $table->integer('codigo_usuario_rechazo');
            $table->date('fecha_juridico');
            $table->integer('codigo_usuario_juridico');
            $table->date('fecha_incobrable');
            $table->integer('codigo_usuario_incobrable');
            $table->date('fecha_cancelacion');
            $table->integer('codigo_usuario_cancelo');
            $table->timestamps();

            $table->foreign('credit_id')->references('id')->on('credits')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
