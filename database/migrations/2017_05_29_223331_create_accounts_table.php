<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('accounts', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('individual_id')->unsigned();//ojo
          $table->integer('tipo_cuenta')->unsigned();
          $table->string('banco');
          $table->string('numero_cuenta');
          $table->timestamps();

          $table->foreign('individual_id')->references('id')->on('individuals');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
