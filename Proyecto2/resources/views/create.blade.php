


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create User</title>

        <!-- Fonts -->
        

     
        
    </head>
    <body>
       <nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container-fluid">
    		
	</nav>
        
        	<div class="container
				col-xs-12
				col-sm-10 col-sm-offset-1 
				col-md-8 col-md-offset-2" >
       <h1>Creador</h1>
       <div class="form-group">
       
        <form method="POST" action="{{action('UserControl@store')}}" >
           {{ csrf_field() }}
           <div class="form-group">
            <label for="name"> Nombre</label>
            <input type="text" name="name" placeholder="Nombre"></div>
           <label for="correo"> Email:</label>
            <input type="email" name="email" placeholder="Ejemplo@gmail.com"><br>
            
            <label for="name"> Tipo</label>
            <select name="type" >
                 <option value="admin">Administrador</option>
                  <option value="Usuario">Usuario</option>
            </select><br>
            <label for="name"> Contraseña</label>
            <input type="password" name="password" placeholder="Contraseña.."><br>
            <input type="submit" value="Submit">
       

            
        </form>
        </div>
        </div>
        <script src="bootstrap.js"></script>
        
    </body>
</html>
