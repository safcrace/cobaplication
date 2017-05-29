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
          $table->string('nombres');
          $table->string('apellidos');
          $table->string('apellido_casada')->nullable();
          $table->string('identificacion');
          $table->date('fecha_nacimiento');
          $table->string('domicilio');
          $table->string('telefonos');
          $table->string('foto');
          $table->string('foto_dpi');
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
