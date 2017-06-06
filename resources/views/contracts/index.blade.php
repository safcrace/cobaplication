@extends('layouts.app')

@section('title','Lista de Productos')

@include('layouts.headerTwo')

@section('content')


  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">


        <div class="box">
          <div class="box-header">

          </div>
          <!-- /.box-header -->
          <div class="box-body">


            <div class="row">
              <div class="col-md-10 col-md-offset-1">


                 <div class="panel panel-default">
                   <div class="panel-heading">
                      <h4 class="box-title">Listado General de Solicitudes Pendientes de Aprobar</h4>

                    </div>
                   <div class="panel-body">
                     {{--<a href="#" class="pull-right"><img src="{{ asset('images/agregar2.png') }}" alt="" style="padding: 8px"></a>--}}
                     <table class="table table-bordered table-striped ">
                       <thead>
                         <th>No. de Credito</th>
                         <th>Cliente</th>
                         <th>Colocador</th>
                         <th>Tipo de Credito</th>
                         <th>Revisar</th>
                       </thead>
                       <tbody>

                          @foreach ($contracts as $contract)

                              <tr>
                                  <td >{{$contract->id}}</td>
                                  <td>{{$contract->nombre1 . " " . $contract->nombre2 . " " . $contract->apellido1 . " " . $contract->apellido2}}</td>
                                  <td>{{$contract->colocador}}</td>
                                  <td>Diario</td>
                                  <td class="text-center">
                                      <a href="{{ route('review',$contract->id) }}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
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

  </script>
@endpush
