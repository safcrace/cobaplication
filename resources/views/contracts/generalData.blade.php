@extends('layouts.app')

@section('title','Lista de Productos')

@include('layouts.headerThree')

@section('content')


  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">


        <div class="box">
          <div class="box-header">
            <div class="row">
              <div class="col-md-2 col-md-offset-1">
                <h2>Otros Datos:</h2>
              </div>
              <div class="col-md-6">
                <h2>{{$individual->nombre1 . " " . $individual->nombre2 . " " . $individual->apellido1 . " " . $individual->apellido2}}</h2>
              </div>
            </div>

          </div>
          <!-- /.box-header -->
          <div class="box-body">


            <div class="row">
              <div class="col-md-10 col-md-offset-1">

                 <div class="panel panel-default">
                   <div class="panel-heading">
                      <h4 class="box-title">Otros Datos</h4>
                    </div>

                   <div class="panel-body">
                     <form>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-1">
                          <label>Telefono Domicilio</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->telefono_domicilio }}" disabled="true">
                        </div>
                        <div class="col-md-2">
                          <label>Nombre Arrendante</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->nombre_arrendante }}" disabled="true">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-2 col-md-offset-1">
                          <div class="radio disabled">
                            <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked disabled="true">
                              Casa Rentada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="radio disabled">
                            <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" disabled="true">
                              Casa Propia
                            </label>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <label>Telefono Arrendante</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->telefono_arrendante }}" disabled="true">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-2 col-md-offset-1">
                          <label>Fecha Inicio Renta</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->inicio_renta }}" disabled="true">
                        </div>
                        <div class="col-md-2">
                          <label>Celular Arrendante</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->celular_arrendante }}" disabled="true">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-2 col-md-offset-1">
                          <label>Renta</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->renta }}" disabled="true">
                        </div>

                    </div>


                    </form>

                   </div>
                 </div>

                 <div class="panel panel-default">
                   <div class="panel-heading">
                      <h4 class="box-title">Datos de Interés</h4>
                    </div>

                   <div class="panel-body">
                      <div class="row" class="form-group">
                        <div class="col-md-2 col-md-offset-1">
                          <label>NIT</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->nit }}" disabled="true">
                        </div>
                        <div class="col-md-2">
                          <label>Facebook</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->facebook }}" disabled="true">
                        </div>
                      </div>

                      <div class="row" class="form-group">
                        <div class="col-md-2 col-md-offset-1">
                          <label>Profesión</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->profesion }}" disabled="true">
                        </div>
                        <div class="col-md-2">
                          <label>instagram</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->instagram }}" disabled="true">
                        </div>
                      </div>

                      <div class="row" class="form-group">
                        <div class="col-md-2 col-md-offset-1">
                          <label>Egresado</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->egresado }}" disabled="true">
                        </div>

                      </div>

                      <div class="row" class="form-group">
                        <div class="col-md-2 col-md-offset-1">
                          <label>Correo Eléctronico</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->email }}" disabled="true">
                        </div>
                      </div>

                   </div>
                 </div>





   <!-- Main component for a primary marketing message or call to action -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title" id="myModalLabel">Motivo</h4>
         </div>
         <div class="modal-body">
           <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              Falta Información
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              Rechazado
            </label>
          </div>
           <textarea class="form-control" rows="3"></textarea>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
           <button type="button" class="btn btn-primary">Guardar</button>
         </div>
       </div>
     </div>
   </div>

@endsection
