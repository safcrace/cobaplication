<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContractIdToIndividualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('individuals', function (Blueprint $table) {

              $table->integer('contract_id')->unsigned()->after('id');

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
        Schema::table('individuals', function (Blueprint $table) {
          $table->dropColumn('contract_id');
          $table->dropForeign(['user_id']);
        });
    }
}
