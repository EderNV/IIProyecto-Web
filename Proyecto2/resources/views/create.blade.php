


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
        <link rel="stylesheet"  href="{{ URL::asset('boostrap/css/bootstrap.css') }}">

        <title>Create User</title>

        <!-- Fonts -->
        
    </head>
    <body>
       
        
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
            <select class="selectpicker" name="type" >
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
     
        
    </body>
</html>
