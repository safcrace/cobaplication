<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractIndividualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_individual', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('contract_id')->unsigned();
          $table->integer('individual_id')->unsigned();
          $table->char('tipo_referencia', 15);
          $table->timestamps();

          $table->foreign('contract_id')
                ->references('id')
                ->on('contracts')
                ->onDelete('cascade');

          $table->foreign('individual_id')
                ->references('id')
                ->on('individuals')
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

            Schema::dropIfExists('contract_individual');

    }
}
