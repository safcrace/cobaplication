@extends('layouts.app')

@section('title','Lista de Productos')

@section('content')


  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">


        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">


            <div class="row">
              <div class="col-md-12">


                 <div class="panel panel-default">
                   <div class="panel-heading">
                      Lista
                      <a href="route('credits.create')">
                      <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                         <button type="button" id='nuevo'  name='nuevo' class="btn btn-success navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"><i class="menu-icon fa fa-plus-square bg-light-blue"></i></span></button>
                      </p>
                      </a>

                    </div>
                   <div class="panel-body">
                     <table class="table table-bordered table-striped ">
                       <thead>
                         <th>Descripción</th>
                         <th>Monto Minimo</th>
                         <th>Monto Máximo</th>
                         <th>Tasa de Interes</th>
                         <th>Acción</th>
                       </thead>
                       <tbody>
                       @foreach($credits as $credit)
                           <tr>
                               <td>{{$credit->descripcion}}</td>
                               <td>{{$credit->monto_minimo}}</td>
                               <td>{{$credit->monto_maximo}}</td>
                               <td>{{$credit->tasa_interes}}</td>
                               <td>
                                   <a href="#">[Editar]</a>
                                   <a href="#">[Eliminar]</a>
                               </td>
                           </tr>
                       @endforeach
                       </tbody>


                      </table>
<div class="text-center">
 {!!$credits->links()!!}
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
