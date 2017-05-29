<div class="form-group">
   {!! Form::label('descripcion', 'Descripción') !!}
   {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca la descripción del crédito']); !!}
</div>
<div class="form-group">
  {!! Form::label('monto_minimo', 'Monto Mínimo') !!}
  {!! Form::text('monto_minimo', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca monto mínimo del crédito']); !!}
</div>
 <div class="form-group">
 {!! Form::label('monto_maximo', 'Monto Máximo') !!}
 {!! Form::text('monto_maximo', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca monto máximo del crédito']); !!}
 </div>
 <div class="form-group">
 {!! Form::label('tasa_interes', 'Tasa de Intéres') !!}
 {!! Form::text('tasa_interes', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca tasa de intéres del crédito']); !!}
</div>
<div class="form-group">
{!! Form::label('cantidad_plazo_minimo', 'Cantidad Plazo Mínimo') !!}
{!! Form::text('cantidad_plazo_minimo', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca plazo mínimo del crédito']); !!}
</div>
<div class="form-group">
{!! Form::label('minimo_time_id', 'Unidad de Medida') !!}
{!! Form::select('minimo_time_id', ['01' => 'Días', '02' => 'Semanas', '03' => 'Mes(es)'], null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca unidad de medida para pago del crédito']); !!}
</div>
<div class="form-group">
{!! Form::label('cantidad_plazo_maximo', 'Cantidad Plazo Máximo') !!}
{!! Form::text('cantidad_plazo_maximo', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca plazo máximo del crédito']); !!}
</div>
<div class="form-group">
 {!! Form::label('maximo_time_id', 'Unidad de Medida') !!}
 {!! Form::select('maximo_time_id', ['01' => 'Días', '02' => 'Semanas', '03' => 'Mes(es)'], null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca unidad de medida para pago del crédito']); !!}
</div>
<div class="form-group">
 {!! Form::label('porcentaje_mora', 'Porcentaje Mora') !!}
 {!! Form::text('porcentaje_mora', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca plazo máximo del crédito']); !!}
</div>
<div class="form-group">
{!! Form::label('payment_id', 'Tipo de Pago') !!}
{!! Form::select('payment_id', ['01' => 'Diario', '02' => 'Semanal', '03' => 'Quincenal', '04' => 'Mensual'], null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca unidad de medida para pago del crédito']); !!}
</div>
<div class="form-group">
{!! Form::label('interest_id', 'Tipo de Intéres') !!}
{!! Form::select('interest_id', ['01' => 'Fijo', '02' => 'Sobre Saldos'], null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca unidad de medida para pago del crédito']); !!}
</div>
