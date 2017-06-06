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

          </div>
          <!-- /.box-header -->
          <div class="box-body">


            <div class="row">
              <div class="col-md-10 col-md-offset-1">

                 <div class="panel panel-default">
                   <div class="panel-heading">
                      <h4 class="box-title">Datos del Negocio: {{$individual->nombre1 . " " . $individual->nombre2 . " " . $individual->apellido1 . " " . $individual->apellido2}}</h4>
                    </div>

                   <div class="panel-body">
                     <form>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-1">
                          <label>Empresa</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->empresa }}" disabled="true">
                        </div>
                        <div class="col-md-2">
                          <label>Ingresos Diario Promedio</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->ingresos_promedio }}" disabled="true">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-2 col-md-offset-1">
                          <label>Telefonos</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->telefono_negocio }}" disabled="true">
                        </div>
                        <div class="col-md-2">
                          <label>Fecha Inicio</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->fecha_inicio }}" disabled="true">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-2 col-md-offset-1">
                          <label>Giro de Negocio</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->giro_negocio }}" disabled="true">
                        </div>
                        <div class="col-md-2">
                          <label>Nombre Encargado</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->nombre_encargado }}" disabled="true">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-2 col-md-offset-1">
                          <label>Horario de Atención</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->horario }}" disabled="true">
                        </div>
                        <div class="col-md-2">
                          <label>Celular Encargado</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->celular_encargado }}" disabled="true">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-2 col-md-offset-1">
                          <label>Numero de Patente</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="" value="{{$individual->patente }}" disabled="true">
                        </div>
                        <div class="col-md-2">
                          <label>Patente</label>
                        </div>
                        <div class="col-md-3">
                          <a class="image-popup-no-margins" href="http://farm4.staticflickr.com/3721/9207329484_ba28755ec4_o.jpg">
                            <img src="http://farm4.staticflickr.com/3721/9207329484_ba28755ec4_o.jpg" width="107" height="75">
                          </a>
                        </div>

                    </div>

                    </form>

                   </div>
                 </div>

                 <div class="panel panel-default">
                   <div class="panel-heading">
                      <h4 class="box-title">Ubicación Empresa</h4>
                    </div>

                   <div class="panel-body">
                     <div class="col-md-8 " >
                       <div class="row" class="form-group">
                           <div class="col-md-2">
                             <label>Dirección</label>
                           </div>
                           <div class="col-md-4">
                             <input type="text" class="form-control" name="" value="{{$individual->direccion}}" disabled="true">
                           </div>

                         </div>
                         <hr>
                         <div class="row" class="form-group">
                             <div class="col-md-8">
                               <div  id="map" class="text-center" style="margin-left: 300px">

                               </div>
                             </div>
                         </div>
                        <hr>
                        <div class="row" class="form-group">
                            <div class="col-md-10">
                              <div class="popup-gallery">
                              	<a href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg" title="The Cleaner"><img src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg" width="75" height="75"></a>
                              	<a href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg" title="Winter Dance"><img src="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_s.jpg" width="75" height="75"></a>
                              	<a href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg" title="The Uninvited Guest"><img src="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_s.jpg" width="75" height="75"></a>
                              	<a href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg" title="Oh no, not again!"><img src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg" width="75" height="75"></a>
                              	<a href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg" title="Swan Lake"><img src="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg" width="75" height="75"></a>
                              	<a href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg" title="The Shake"><img src="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg" width="75" height="75"></a>
                              	<a href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg" title="Who's that, mommy?"><img src="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg" width="75" height="75"></a>
                              </div>
                            </div>
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

@push('scripts')

  <script type="text/javascript">

    $(document).ready(function() {

      map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 14.64072, lng: -90.51327},
      zoom: 15
      });

      var marker = new google.maps.Marker({
          position: {lat: 14.64072, lng: -90.51327},
          map: map
        });

      $('.popup-gallery').magnificPopup({
    		delegate: 'a',
    		type: 'image',
    		tLoading: 'Loading image #%curr%...',
    		mainClass: 'mfp-img-mobile',
    		gallery: {
    			enabled: true,
    			navigateByImgClick: true,
    			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    		},
    		image: {
    			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
    			titleSrc: function(item) {
    				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
    			}
    		}

    	});

      $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
          verticalFit: true
        }

      });

      $('.image-popup-fit-width').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        image: {
          verticalFit: false
        }
      });

      $('.image-popup-no-margins').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
          verticalFit: true
        },
        zoom: {
          enabled: true,
          duration: 300 // don't foget to change the duration also in CSS
        }
      });

    });


  </script>
@endpush
