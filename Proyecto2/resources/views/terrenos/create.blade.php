@extends('layouts.app')


@section('title', 'Crear Propiedad')

@section('content')
	<h2>Crear Propiedad</h2>

    	<form class="form-horizontal" method="POST" action="{{action('PropiedadController@store')}}" >
        	{{ csrf_field() }}
        	<div class="form-group">
            	<label class="col-sm-2 control-label" for="nombre">Nombre</label>
            	<div class="col-sm-10">
            		<input class="form-control" type="text" name="nombre" placeholder="Nombre">
            	</div>
            </div>
            <div class="form-group">
           		<label class="col-sm-2 control-label" for="ubicacion">Ubicación:</label>
           		<div class="col-sm-10">
                <select class="form-control" name="ubicacion" >
                  <option value="">Seleccione una ubicación..</option>
                  <option value="Alajuela">Alajuela</option>
                  <option value="Cartago">Cartago</option>
                  <option value="Guanacaste">Guanacaste</option>
                  <option value="Heredia">Heredia</option>
                  <option value="Limon">Limón</option>
                  <option value="Puntarenas">Puntarenas</option>
                  <option value="San Jose">San José</option>
                </select>
            	</div>
            </div>
            <div class="form-group">
           		<label class="col-sm-2 control-label" for="descripcion">Descripción:</label>
           		<div class="col-sm-10">
           			<textarea class="form-control" rows="3" name="descripcion" placeholder="Agregue una breve descripción" style="resize:vertical"></textarea>
            	</div>
            </div>
            <div class="form-group">
            	<label class="col-sm-2 control-label" for="banco">Banco:</label>
            	<div class="col-sm-10">
            		<select class="form-control" name="banco" >
                 		<option value="Banco Nacional">Banco Nacional</option>
                  		<option value="Banco de Costa Rica">Banco de Costa Rica</option>
                  		<option value="Banco Popular">Banco Popular</option>
            		</select>
            	</div>
            </div>
            <div class="form-group">
            	<label class="col-sm-2 control-label" for="dimension">Dimensiones:</label>
            	<div class="col-sm-2">
	            	<label class="sr-only" for="dimension">Dimensiones (en m2)</label>
				    <div class="input-group">
				    	<input type="text" class="form-control" id="dimension" name="dimension" placeholder="Área">
				    	<div class="input-group-addon">m2</div>
				    </div>
			    </div>
            </div>
            <div class="form-group">
            	<label class="col-sm-2 control-label" for="precio">Precio:</label>
            	<div class="col-sm-2">
	            	<label class="sr-only" for="precio">Amount (in dollars)</label>
				    <div class="input-group">
				    	<div class="input-group-addon">$</div>
				    	<input type="text" class="form-control" id="precio" name="precio" placeholder="Monto">
				    </div>
			    </div>
            </div>
			<div class="form-group">
            	<label class="col-sm-2 control-label" for="foto">Fotografía</label>
            	<div class="col-sm-10">
            		<input class="form-control" type="text" name="foto" placeholder="URL de la foto">
            	</div>
            </div>
            <div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      				<button type="submit" class="btn btn-success">Crear</button>
    			</div>
  			</div>
    </form>

@endsection