@extends('layouts.app')

@section('title','Lista de Productos')

@section('content')


  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">


        <div class="box">
          <div class="box-header">

          </div>
          <!-- /.box-header -->
          <div class="box-body">


            <div class="row">
              <div class="col-md-12">


                 <div class="panel panel-default">
                   <div class="panel-heading">
                      <h4 class="box-title">Listado General de Solicitudes Pendientes de Aprobar</h4>
                      <a href="#"><button type="button" id='nuevo'  name='nuevo' class="btn btn-primary navbar-btn pull-right" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"><i class="menu-icon fa fa-check bg-light-blue"></i></span></button></a>
                    </div>
                   <div class="panel-body">
                     <table class="table table-bordered table-striped ">
                       <thead>
                         <th>No. de Credito</th>
                         <th>Cliente</th>
                         <th>Colocador</th>
                         <th>Monto Solicitado</th>
                         <th>Tipo de Credito</th>
                         <th>Aprobar</th>
                       </thead>
                       <tbody>


                           <tr>
                               <td >1</td>
                               <td>Juan Antonio Escobar</td>
                               <td>Mario Estrada</td>
                               <td>1000</td>
                               <td>Diario</td>
                               <td>
                                   <a href="#"><button type="button" id='nuevo'  name='nuevo' class="btn btn-primary navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"><i class="menu-icon fa fa-check bg-light-blue"></i></span></button></a>
                               </td>
                           </tr>


                       </tbody>


                      </table>
<div class="text-center">

</div>
                        <div id="list-product"></div>


                   </div>
                 </div>


              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>

   <!-- Main component for a primary marketing message or call to action -->

@endsection

@push('scripts')
  <script type="text/javascript">

  </script>
@endpush
