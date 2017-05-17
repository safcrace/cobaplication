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
                      <h4 class="box-title">Listado General de Solicitudes Pendientes de Aprobar</h3>

                    </div>
                   <div class="panel-body">
                     <table class="table table-bordered table-striped ">
                       <thead>
                         <th>Descripción</th>
                         <th>Monto Minimo</th>
                         <th>Monto Máximo</th>
                         <th>Tasa de Interes</th>
                         <th>Aprobar</th>
                       </thead>
                       <tbody>
                       @foreach($contracts as $contract)
                           <tr>
                               <td>{{$contract->id}}</td>
                               <td>{{$contract->monto_otorgado}}</td>
                               <td>{{$contract->tipo_cobro}}</td>
                               @foreach($contract->individuals as $individual)
                                 <td>{{$individual->name}}</td>
                               @endforeach
                               <td>
                                   <button type="button" id='nuevo'  name='nuevo' class="btn btn-primary navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"><i class="menu-icon fa fa-check bg-light-blue"></i></span></button>
                               </td>
                           </tr>
                       @endforeach
                       </tbody>


                      </table>
<div class="text-center">
 {!!$contracts->links()!!}
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
  $("#nuevo").click(function(event)
    {
        document.location.href = "{{ route('credits.create')}}";
    });
  </script>
@endpush
