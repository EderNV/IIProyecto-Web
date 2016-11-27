@extends('layouts.app')

@section('title', 'Contacto')
 	
@section('content')
	<div class="col-sm-6">
		<h2>Contacto</h2>
		<div class="well row">
			@include('flash::message')

			<form class="form-horizontal" method="POST" action="{{ action('MailController@store') }}" >
	        	{{ csrf_field() }}
	        	<div class="form-group">
	            	<input class="form-control" type="email" name="email" placeholder="example@example.com">
	            </div>

	            <div class="form-group">
	            	<input class="form-control" type="text" name="asunto" placeholder="Asunto">
	            </div>

	            <div class="form-group">
           			<textarea class="form-control" rows="8" name="mensaje" placeholder="Escribe tu mensaje..." style="resize:vertical"></textarea>
            	</div>

	            <div class="form-group">
	      			<button type="submit" class="btn btn-success">Enviar</button>
	  			</div>
	    	</form>
		</div>
	</div>
	<div class="col-sm-5 col-sm-offset-1">
		<h2>Ubicación</h2>
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		
		<script>
			function initialize() {
			    var latitude = 10.322640;
			    var longitude = -84.430949;
			    var zoom = 150;

			    var LatLng = new google.maps.LatLng(latitude, longitude);

				var mapProp = {
					center: LatLng,
				    zoom:17,
				    mapTypeId:google.maps.MapTypeId.ROADMAP
				};
				var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
				var marker = new google.maps.Marker({
				    position: LatLng,
				    map: map,
				    title: 'BienesCR',
				    draggable: false
				});
			}
			
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>

        <div id="googleMap" style="width:auto;height:400px;"></div>
	</div>
@endsection