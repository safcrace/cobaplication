@extends('layouts.app')

@section('title','Lista de Productos')

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
              <div class="col-md-4 col-md-offset-4">


                 <div class="panel panel-default">
                   <div class="panel-heading">
                      <h4 class="box-title">Formulario de Créditos</h4>

                    </div>
                   <div class="panel-body">
                     {{--<a href="#" class="pull-right"><img src="{{ asset('images/agregar2.png') }}" alt="" style="padding: 8px"></a>--}}
                     {!! Form::open(['route' => 'credits.store', 'method' => 'POST']) !!}

											 @include('credits.partials.fields')

                      <button type="submit" class="btn btn-primary text-center">Crear Crédito</button>
                    {!! Form::close() !!}

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
