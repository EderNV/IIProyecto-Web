@extends('plantilla')

@section('title', 'Terrenos')
 	
@section('content')
	<h1>Hola Mundo</h1>

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
		        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			</div>
			
		</div>
	@endforeach


@endsection