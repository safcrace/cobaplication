<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
  protected $fillable = ['monto_solicitado', 'monto_otorgado', 'tasa_interes', 'tasa_mora', 'tipo_interes', 'tipo_cobro',
                         'cuota', 'numero_cuotas', 'fecha_solicitud', 'codigo_usuario_solicito', 'fecha_aprobacion',
                         'codigo_usuario_aprobo', 'fecha_entrega', 'codigo_usuario_entrego', 'fecha_rechazo', 'codigo_usuario_rechazo',
                         'fecha_juridico', 'codigo_usuario_juridico', 'fecha_cancelacion', 'codigo_usuario_cancelo',
                         'fecha_incobrable', 'codigo_usuario_incobrable'];

 public function individuals(){
   return $this->belongsToMany(Individual::class)
               ->withPivot('tipo_referencia');
 }
}
