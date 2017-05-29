@extends('layouts.app')

@section('title','Lista de Productos')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        FORMULARIO DE INGRESO
        <small>Créditos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
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
              <div class="col-md-6">


                 <div class="panel panel-default">
                   <div class="panel-heading">
                      Editar Crédito {{ $credit->descripcion }}

                    </div>
                   <div class="panel-body">
										 {!! Form::model($credit, ['route' => ['credits.update', $credit->id], 'method' => 'PATCH']) !!}

											 @include('credits.partials.fields')

                      <button type="submit" class="btn btn-default">Actualizar Crédito</button>
                    {!! Form::close() !!}
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
{{--
@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nuevo Tipo de Crédito</div>
				<div class="panel-body">

				    @include('admin.partials.messages')

                     Form::open(['route' => 'credits.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                      @include('admin.users.partials.fields')
                      <button type="submit" class="btn btn-default">Crear usuario</button>
                    {!! Form::close() !!}

                    {!! Form::open(['route' => 'credits.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                       <div class="row">
                         <div class="col-md-2">
                           {!! Form::label('email', 'E-Mail Address') !!}
                         </div>
                         <div class="col-md-7">
                           {!! Form::text('email'); !!}
                         </div>
                       </div>
                    {!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection --}}
