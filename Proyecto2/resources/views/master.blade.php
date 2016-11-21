<!doctype html>
<html >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <link rel="stylesheet"  href="{{ URL::asset('boostrap/css/bootstrap.css') }}">
    <title>Bienvenido | Home</title>
   
</head>
<body>

<div class="row">
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">BienesCR</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
       <!-- <li><a href="#">Link</a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bienes Raices <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Ingresar</a></li>
            
          </ul>
        </li>
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('user.index')}}">Lista</a></li>
            <li><a href="{{route('user.create')}}">Crear Nuevo Usuario</a></li>
            
          </ul>
        </li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Salir</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>


<div class="container">
  <div class="form-group">
    <form class="form-horizontal" method="POST" action="{{action('PropiedadController@filtros')}}" >
      {{ csrf_field() }}
            
               <div class="form-group">
            <label class="col-sm-2 control-label" for="name"> Provincia</label>
            <div class="col-sm-10">
            <select class="form-control" name="ubicacion" >
                 <option value="Alajuela">Alajuela</option>
                  <option value="Sj">San Jose</option>
                  <option value="h">Heredia</option>
                  <option value="c">Cartago</option>
                  <option value="p">Puntarenas</option>
                  <option value="l">Limon</option>
                  <option value="g">Guanacaste</option>

            </select><br></div></div>
        
            
                
                <div class="form-group">
            <label class="col-sm-2 control-label" >Precio mínimo</label>
            <div class="col-sm-10">
            <input class="form-control" type="number" name="pmin" min="0"  placeholder="Cualquiera" title="Por favor solo proporcione digitos">
            </div>
            
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" >Precio máximo</label>
            <div class="col-sm-10">
            <input class="form-control" type="number" name="pmax" min="0" placeholder="Cualquiera" title="Por favor solo proporcione digitos">
            </div>
          
        </div>
            <div class="form-group">
            <label class="col-sm-2 control-label" for="min-area">Área mínima <span>(mts2)</span></label>
            <div class="col-sm-10">
            <input class="form-control" type="number" min="0" name="min-area"  placeholder="Cualquiera" title="Por favor solo proporcione digitos">
        </div> </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="max-area">Área máxima <span>(mts2)</span></label>
            <div class="col-sm-10">
            <input class="form-control" type="number" min="0" name="max-area"  placeholder="Cualquiera" title="Por favor solo proporcione digitos">
            </div>
        </div>
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" value="Buscar" class=" real-btn btn">
    </div>
    </form>
    <hr>
    </div>

  </div>


<script src="{{ URL::asset('js/jquery-3.0.0.js') }}"></script>
  <script src="{{ URL::asset('boostrap/js/bootstrap.js') }}"></script>


</body>

</html>