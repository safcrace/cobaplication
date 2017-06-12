<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('contrato_id')->unsigned();
          $table->integer('tipo_referencia_id')->unsigned();
          $table->integer('categoria_persona_id')->unsigned();
          $table->string('nombre_uno');
          $table->string('nombre_dos');
          $table->string('apellido_uno');
          $table->string('apellido_dos');
          $table->string('apellido_casada')->nullable();
          $table->datetime('fecha_nacimiento');
          $table->string('identificacion');
          $table->char('genero');
          $table->string('telefono_contacto');
          $table->string('telefono_domicilio');
          $table->boolean('casa_propia');
          $table->datetime('inicio_renta');
          $table->float('renta', 8,2);
          $table->string('nombre_arrendante');
          $table->string('telefono_arrendante');
          $table->string('celular_arrendante');
          $table->string('domicilio');
          $table->integer('latitud');
          $table->integer('longitud');
          $table->string('nit');
          $table->string('profesion');
          $table->string('egresado');
          $table->string('email')->unique();
          $table->string('facebook');
          $table->string('instagram');
          $table->boolean('revisado');
          $table->boolean('aprobado');
          $table->timestamps();

          $table->foreign('contrato_id')->references('id')->on('contratos')->onDelete('cascade');
          $table->foreign('tipo_referencia_id')->references('id')->on('tipo_referencias')->onDelete('cascade');
          $table->foreign('categoria_persona_id')->references('id')->on('categoria_personas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
