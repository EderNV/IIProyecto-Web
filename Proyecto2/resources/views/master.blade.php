<!doctype html>
<html >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienvenido | Curso Laravel</title>
   
</head>
<body>

<div class="row">
      <div class="large-3 columns">
       
      </div>
      <div class="large-9 columns">
        <ul class="right button-group">
          <li><a href="" class="button">Inicio</a></li>
          <li><a href="" class="button">Nuevo usuario</a></li>
        </ul>
      </div>
</div>
<input type="hidden" id="hidRoute" value=""/>

@yield('content')

<footer class="row">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p>&copy; Copyright <?php echo date('Y'); ?>.</p>
          </div>
        </div>
      </div>
    </footer>
<script type="text/javascript" src=""></script>
<script type="text/javascript" src=""></script>

</body>
</html>