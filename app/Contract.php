<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
  protected $fillable = ['monto_solicitado', 'monto_otorgado', 'tasa_interes', 'tasa_mora', 'tipo_interes', 'payment_id',
                         'cuota', 'numero_cuotas', 'request_date', 'request_user_id', 'approval_date',
                         'approval_user_id', 'delivery_date', 'delivery_user_id', 'rejection_date', 'rejection_user_id',
                         'legal_date', 'legal_user_id', 'date_cancellation', 'cancellation_user_id',
                         'bad_date', 'bad_user_id'];

 public function individuals(){
   return $this->belongsToMany(Individual::class)
               ->withPivot('tipo_referencia');
 }
}

/*$table->foreign('request_user_id')->references('id')->on('users')->onDelete('cascade');
$table->foreign('approval_user_id')->references('id')->on('users')->onDelete('cascade');
$table->foreign('delivery_user_id')->references('id')->on('users')->onDelete('cascade');
$table->foreign('rejection_user_id')->references('id')->on('users')->onDelete('cascade');
$table->foreign('legal_user_id')->references('id')->on('users')->onDelete('cascade');
$table->foreign('bad_user_id')->references('id')->on('users')->onDelete('cascade');
$table->foreign('cancellation_user_id')->references('id')->on('users')->onDelete('cascade');*/
