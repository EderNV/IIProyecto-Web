<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 	<title>@yield('title', 'Default')</title>
 	<link rel="shortcut icon" href="imagenes/favicon.ico">
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

 	<link rel="stylesheet"  href="{{ asset('boostrap/css/bootstrap.css') }}">
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('user.index')}}">Lista</a></li>
            <li><a href="{{route('user.create')}}">Crear Nuevo Usuario</a></li>
            
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Propiedades <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('propiedades.index')}}">Lista Propiedades</a></li>
            <li><a href="{{route('propiedades.create')}}">Insertar Propiedades</a></li>
            
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
		<section>
			@yield('content')
		</section>
	</div>

	<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    
     <script src="{{ asset('boostrap/js/bootstrap.js') }}"></script>
</body>

</html>

