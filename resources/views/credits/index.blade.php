@extends('layouts.app')

@section('title','Lista de Productos')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">


        <div class="box">
          <div class="box-header">

          </div>
          <!-- /.box-header -->
          <div class="box-body">


            <div class="row">
              <div class="col-md-12">


                 <div class="panel panel-default">
                   <div class="panel-heading">
                      <h4 class="box-title">Bolsa de Valores</h4>

                    </div>

                    {{--@if (Session::has('message'))

            				    <p class="alert alert-success">{{ Session::get('message') }}</p>

            				@endif --}}
                    <a href="{{ route('credits.create') }}" class="pull-right">
                      <img src="{{ asset('images/agregar2.png') }}" alt="" style="padding: 20px">
                    </a>
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
                           <tr data-id = {{ $credit->id }}>
                               <td>{{$credit->descripcion}}</td>
                               <td>{{$credit->monto_minimo}}</td>
                               <td>{{$credit->monto_maximo}}</td>
                               <td>{{$credit->tasa_interes}}</td>
                               <td>
                                   <a href="{{ route('credits.edit', $credit->id) }}">Editar</a>|
                                   <a href="#" class="btn-delete">Eliminar</a>
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
{!! Form::open(['route' => ['credits.destroy', ':CREDITS_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}

{!! Form::close() !!}
@endsection

@push('scripts')
  <script type="text/javascript">
    $('.btn-delete').click(function(e) {
      e.preventDefault();
      var row = $(this).parents('tr');
      var id = row.data('id');
      var form = $('#form-delete');
      var url = form.attr('action').replace(':CREDITS_ID', id);
      var data = form.serialize()

      row.fadeOut();

      $.post(url, data, function(result) {
        alert(result);
      });

    });
  </script>
@endpush
