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
          $table->char('nombres', 30);
          $table->char('apellidos', 30);
          $table->char('identificacion', 14);
          $table->date('fecha_nacimiento');
          $table->string('domicilio');
          $table->char('telefonos', 30);
          $table->string('foto');
          $table->string('foto_dpi');
          $table->char('categoria', 1);
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
        Schema::dropIfExists('individuals');
    }
}
