


@extends('plantilla')

@section('content')
       
        
      <div class="container" >
       <h1>Creador</h1>
       <div class="form-group">
       
       
       
        <form class="form-horizontal" method="POST" action="{{action('UserControl@store')}}" >
           {{ csrf_field() }}
           <div class="form-group">
            <label class="col-sm-2 control-label" for="name"> Nombre</label>
            <div class="col-sm-10">
            <input class="form-control type="text" name="name" placeholder="Nombre"></div></div>
            <div class="form-group">
           <label class="col-sm-2 control-label" for="correo"> Email:</label>
           <div class="col-sm-10">
            <input class="form-control type="email" name="email" placeholder="Ejemplo@gmail.com"><br></div></div>
            <div class="form-group">
            <label class="col-sm-2 control-label" for="name"> Tipo</label>
            <div class="col-sm-10">
            <select class="form-control" name="type" >
                 <option value="admin">Administrador</option>
                  <option value="usuario">Usuario</option>
            </select><br></div></div>
            <div class="form-group">
            <label class="col-sm-2 control-label" for="name"> Contraseña</label>
            <div class="col-sm-10">
            <input class="form-control type="password" name="password" placeholder="Contraseña.."><br></div></div>
            <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
       

            
        </form>
        </div>
        </div>
     
        
 @endsection