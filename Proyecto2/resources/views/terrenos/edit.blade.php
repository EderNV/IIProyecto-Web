@extends('layouts.app')

@section('title', 'Editar propiedad')

@section('content')

	<h3>Editar {{ $propiedad->nombre }}</h3>
	
	<form class="form-horizontal" method="POST" action="{{ action('PropiedadController@update', $propiedad->id) }}" >
        	{{ csrf_field() }}
        	<input type="hidden" name="_method" value="PUT">﻿
        	<div class="form-group">
            	<label class="col-sm-2 control-label" for="nombre">Nombre</label>
            	<div class="col-sm-10">
            		<input class="form-control" type="text" id="nombre" name="nombre" value="{{ $propiedad->nombre }}">
            	</div>
            </div>
            <div class="form-group">
           		<label class="col-sm-2 control-label" for="ubicacion">Ubicación:</label>
           		<div class="col-sm-10">
            		<input class="form-control" type="text" id="ubicacion" name="ubicacion" value="{{ $propiedad->ubicacion }}">
            	</div>
            </div>
            <div class="form-group">
           		<label class="col-sm-2 control-label" for="descripcion">Descripción:</label>
           		<div class="col-sm-10">
           			<textarea class="form-control" rows="3" id="descripcion" name="descripcion" style="resize:vertical">{{ $propiedad->descripcion }}</textarea>
            	</div>
            </div>
            <div class="form-group">
            	<label class="col-sm-2 control-label" for="banco">Banco:</label>
            	<div class="col-sm-10">
            		<select class="form-control" id="banco" name="banco" >
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
				    	<input type="text" class="form-control" id="dimension" name="dimension" value="{{ $propiedad->dimension }}">
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
				    	<input type="text" class="form-control" id="precio" name="precio" value="{{ $propiedad->precio }}">
				    </div>
			    </div>
            </div>
			<div class="form-group">
            	<label class="col-sm-2 control-label" for="foto">Fotografía</label>
            	<div class="col-sm-10">
            		<input class="form-control" type="text" id="foto" name="foto" value="{{ $propiedad->foto }}">
            	</div>
            </div>
            <div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      				<button type="submit" class="btn btn-success">Editar</button>
    			</div>
  			</div>
    </form>

@endsection