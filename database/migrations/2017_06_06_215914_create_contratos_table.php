<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('bolsa_valores_id')->unsigned();
          $table->integer('estado_contrato_id')->unsigned();
          $table->integer('tipo_cobro_id')->unsigned();
          $table->float('monto_solicitado', 8,2);
          $table->float('monto_otorgado', 8,2)->nullable();
          $table->decimal('tasa_interes', 6,2);
          $table->decimal('tasa_mora', 6,2);
          $table->enum('tipo_interes', ['Fijo', 'Sobre Saldos']);
          $table->float('cuota', 8,2);
          $table->integer('numero_cuotas')->nullable();
          $table->date('fecha_solicitud');
          $table->integer('solicitud_user_id')->unsigned();
          $table->datetime('fecha_revision')->nullable();
          $table->integer('revision_user_id')->nullable()->unsigned();
          $table->datetime('fecha_aprobacion')->nullable();
          $table->integer('aprobacion_user_id')->nullable()->unsigned();
          $table->datetime('fecha_entrega')->nullable();
          $table->integer('entrega_user_id')->nullable()->unsigned();
          $table->datetime('fecha_rechazo')->nullable();
          $table->integer('rechazo_user_id')->nullable()->unsigned();
          $table->datetime('fecha_juridico')->nullable();
          $table->integer('juridico_user_id')->nullable()->unsigned();
          $table->datetime('fecha_cancelacion')->nullable();
          $table->integer('cancelacion_user_id')->nullable()->unsigned();
          $table->timestamps();

          $table->foreign('bolsa_valores_id')->references('id')->on('bolsa_valores');
          $table->foreign('estado_contrato_id')->references('id')->on('estado_contratos');
          $table->foreign('tipo_cobro_id')->references('id')->on('tipo_cobros');
          $table->foreign('solicitud_user_id')->references('id')->on('users');
          $table->foreign('revision_user_id')->references('id')->on('users');
          $table->foreign('aprobacion_user_id')->references('id')->on('users');
          $table->foreign('rechazo_user_id')->references('id')->on('users');
          $table->foreign('juridico_user_id')->references('id')->on('users');
          $table->foreign('cancelacion_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
