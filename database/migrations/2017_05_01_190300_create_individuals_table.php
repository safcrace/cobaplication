<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuals', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('credit_id')->unsigned();
          $table->integer('reference_id')->unsigned();
          $table->integer('category_id')->unsigned();
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
          $table->string('telefono_arrendante');
          $table->string('celular_arrendante');
          $table->integer('latitud');
          $table->integer('longitud');
          $table->string('domicilio');
          $table->string('nit');
          $table->string('profesion');
          $table->string('egresado');
          $table->string('email')->unique();
          $table->string('facebook');
          $table->string('instagram');
          $table->timestamps();

          $table->foreign('credit_id')->references('id')->on('credits')->onDelete('cascade');
          $table->foreign('reference_id')->references('id')->on('references')->onDelete('cascade');
          $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individuals');
    }
}
