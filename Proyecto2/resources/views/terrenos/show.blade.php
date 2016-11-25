@extends('plantilla')

@section('title') {{ $propiedad->nombre }} @stop
 	
@section('content')

	<div class="well row">
		<div class="col-sm-6 col-md-4">
			<a href="{{ $propiedad->foto}}" class="thumbnail">
			    <img src="{{ $propiedad->foto}}" alt="...">
			</a>
		</div>
		<div class="col-sm-6 col-md-8">
			<h1>{{ $propiedad->nombre}}</h1>
			<hr></hr>

			<i>Ubicación</i>
			<p><font size="4">{{ $propiedad->ubicacion }}</font></p>

			<i>Dimensión</i>
			<p><font size="4">{{ $propiedad->dimension }} m<sup>2</sup> </font></p>

			<i>Vende</i>
			<p><font size="4">{{ $propiedad->banco }}</font></p>

			<i>Descripción</i>
			<p>{{ $propiedad->descripcion }}</p>

			<br/>

			<i>Precio</i>
			<p><font size="5">${{ $propiedad->precio }}</font></p>

	        <a href="#" class="btn btn-info">Obtener info por e-mail</a>
			<a href="{{ route('propiedades.edit', $propiedad->id) }}" class="btn btn-warning">Editar</a>
			<a href="{{ route('propiedades.destroy', $propiedad->id) }}" onclick="return confirm('¿Seguro que desea eliminar este elemento?')" class="btn btn-danger">Eliminar</a>
		</div>
	</div>

	<div class="well row">

		<p>¿Conoces esta propiedad? Compártenos tu comentario</p>
		<form method="POST" action="{{ action('ComentarioController@store') }}">
        	{{ csrf_field() }}
        	<input type="hidden" name="propiedad_id" value="{{ $propiedad->id }}">﻿
        	<input type="hidden" name="usuario_id" value="{{ Auth::id() }}">﻿
        	<div class="form-group">
	        	<div class="col-xs-10 col-md-11">
	           		<textarea class="form-control" rows="3" name="texto" placeholder="Escribe tu mensaje..." style="resize:vertical"></textarea>
	           	</div>
	           	<div class="col-xs-2 col-md-1">
	      			<button type="submit" class="btn btn-primary">Comentar</button>
	    		</div>
            </div>    
    	</form>

    	<br/><br/><br/><br/><br/>
    	<hr/>

		<h2>Comentarios</h2>

		@foreach($comentarios as $comentario)
			<div class="well row" style="background-color:white;">
				<p>
					<strong>{{ App\User::find($comentario->usuario_id)->name }}</strong> 
					<small style="padding-left:5em;">{{ $comentario->created_at }}</small>
				</p>
				<hr/>
				<p>{{ $comentario->texto }}</p>
			</div>
		@endforeach

		

	</div>
@endsection