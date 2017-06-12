<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
  protected $fillable = ['bolsa_valores_id', 'estado_contrato_id', 'tipo_cobro_id', 'monto_solicitado',
                         'tasa_interes', 'tasa_mora', 'tipo_interes', 'cuota', 'numero_cuotas', 'solicitud_fecha',
                         'solicitud_user_id', 'fecha_revision', 'revision_user_id', 'fecha_aprobacion', 'aprobacion_user_id',
                         'fecha_entrega', 'entrega_user_id', 'fecha_rechazo', 'rechazo_user_id', 'fecha_juridico',
                         'juridico_user_id', 'fecha_cancelacion', 'cancelation_user_id'];

 public function personas(){
   return $this->belongsToMany(Persona::class)
               ->withPivot('tipo_referencia_id');
 }
}
