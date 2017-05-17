@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nuevo Tipo de Crédito</div>
				<div class="panel-body">

				    {{-- @include('admin.partials.messages') --}}

                    {!! Form::open(['route' => 'credits.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                      {{--@include('admin.users.partials.fields')--}}
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
@endsection
