

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 	<title>Terrenos</title>
 	<link rel="shortcut icon" href="imagenes/favicon.ico">
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

 	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	<h1>Hola Mundo</h1>

	@foreach($listaTerrenos as $terreno)
		{{ $terreno->banco}}
	@endforeach

	<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>

