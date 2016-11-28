@extends('layouts.app')

@section('title', 'Propiedades')
 	
@section('content')
	<h1>Bienes</h1>
	
	@include('flash::message')

	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Filtrar Búsqueda</button>
  <div id="demo" class="collapse">
    	<div class="container">
          <div class="form-group">
            <form class="form-horizontal" method="POST" action="{{ action('PropiedadController@filtros') }}" >
              {{ csrf_field() }}
                    
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name"> Provincia</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="ubicacion" >
                          <option value="Todas">Todas</option>
                          <option value="Alajuela">Alajuela</option>
                          <option value="Cartago">Cartago</option>
                          <option value="Guanacaste">Guanacaste</option>
                          <option value="Heredia">Heredia</option>
                          <option value="Limon">Limón</option>
                          <option value="Puntarenas">Puntarenas</option>
                          <option value="San Jose">San José</option>

                    </select><br></div></div>
                
                    
                        
                        <div class="form-group">
                    <label class="col-sm-2 control-label" >Precio mínimo <span>($)</span></label>
                    <div class="col-sm-10">
                    <input class="form-control" type="number" name="pmin" min="0" value="0"  placeholder="Cualquiera" title="Por favor solo proporcione digitos">
                    </div>
                    
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" >Precio máximo <span>($)</span></label>
                    <div class="col-sm-10">
                    <input class="form-control" type="number" name="pmax" min="0" value="1000000000" placeholder="Cualquiera" title="Por favor solo proporcione digitos">
                    </div>
                  
                </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label" for="minarea">Área mínima <span>(m<sup>2</sup>)</span></label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" min="0" name="minarea"  placeholder="Cualquiera" title="Por favor solo proporcione digitos">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="maxarea">Área máxima <span>(m<sup>2</sup>)</span></label>
                    <div class="col-sm-10">
                    <input class="form-control" type="number" min="0" name="maxarea"  placeholder="Cualquiera" title="Por favor solo proporcione digitos">
                    </div>
                </div>
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" value="Buscar" class=" real-btn btn">
                </div>
            </form>
            <hr>
          </div>
      </div>
  </div>
  <hr><br>
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
		      <p>{{ str_limit($terreno->descripcion, 200) }}</p>
          <h4>{{ $terreno->dimension }} m<sup>2</sup></h4>
          <h4><strong>$ {{ $terreno->precio }}</strong></h4>
		      <hr></hr>
		      
          <a href="{{ route('propiedades.show', $terreno->id) }}" class="btn btn-primary">  Ver info</a>
		       @if($usuario=="admin")
				  <a href="{{ route('propiedades.edit', $terreno->id) }}" class="btn btn-warning">Editar</a>

				  <a href="{{ route('propiedades.destroy', $terreno->id) }}" onclick="return confirm('¿Seguro que desea eliminar este elemento?')" class="btn btn-danger">Eliminar</a>
          @endif
			</div>
		</div>
	@endforeach


@endsection