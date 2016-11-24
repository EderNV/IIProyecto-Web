@extends('plantilla')

@section('title', 'Propiedades')
 	
@section('content')
	<h1>Hola Mundo</h1>
	@include('flash::message')

	@foreach($terrenos as $terreno)
		<div class="well row">
			<div class="col-sm-6 col-md-4">
				<a href="{{ $terreno->foto}}" class="thumbnail">
				    <img src="{{ $terreno->foto}}" alt="...">
				</a>
			</div>
			<div class="col-sm-6 col-md-8">
				<h3>{{ $terreno->nombre}}</h3>
				<h4>{{ $terreno->ubicacion }}</h4>
		        <p>{{ $terreno->descripcion}}</p>
		        <strong>$ {{ $terreno->precio }}</strong>
		        <hr></hr>
		        <a href="{{ route('propiedades.show', $terreno->id) }}" class="btn btn-primary">Ver info</a>
		        
				<a href="{{ route('propiedades.edit', $terreno->id) }}" class="btn btn-warning">Editar</a>

				<a href="{{ route('propiedades.destroy', $terreno->id) }}" onclick="return confirm('¿Seguro que desea eliminar la propiedad {{ $terreno->nombre }}')" class="btn btn-danger">Eliminar</a>
				
			</div>
			
		</div>
	@endforeach


@endsection