@extends('plantilla')

@section('title', 'Contacto')
 	
@section('content')
	<div class="col-sm-7">
		<div class="well row">
			@include('flash::message')
			<h2>Contacto</h2>

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
	<div class="col-sm-5">
		<h2>Ubicación</h2>
	</div>
@endsection