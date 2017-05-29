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
            $table->integer('payment_id')->unsigned();
            $table->float('monto_solicitado', 8,2);
            $table->float('monto_otorgado', 8,2)->nullable();
            $table->decimal('tasa_interes', 6,2);
            $table->decimal('tasa_mora', 6,2);
            $table->integer('interest_id')->unsigned();
            $table->float('cuota', 8,2);
            $table->integer('numero_cuotas')->nullable();
            $table->date('request_date');
            $table->integer('request_user_id');
            $table->datetime('approval_date')->nullable();
            $table->integer('approval_user_id')->nullable();
            $table->datetime('delivery_date')->nullable();
            $table->integer('delivery_user_id')->nullable();
            $table->datetime('rejection_date')->nullable();
            $table->integer('rejection_user_id')->nullable();
            $table->datetime('legal_date')->nullable();
            $table->integer('legal_user_id')->nullable();
            $table->datetime('bad_date')->nullable();
            $table->integer('bad_user_id')->nullable();
            $table->datetime('cancellation_date')->nullable();
            $table->integer('cancellation_user_id')->nullable();
            $table->timestamps();

            $table->foreign('credit_id')->references('id')->on('credits')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
            $table->foreign('interest_id')->references('id')->on('interests')->onDelete('cascade');
            /*$table->foreign('request_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approval_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('delivery_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('rejection_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('legal_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('bad_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('cancellation_user_id')->references('id')->on('users')->onDelete('cascade');*/
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
