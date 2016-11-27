<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td><strong>Nombre</strong></td>
			<td>{{ $nombre }}</td>
		</tr>
		<tr>
			<td><strong>Ubicacion</strong></td>
			<td>{{ $ubicacion }}</td>
		</tr>
		<tr>
			<td><strong>Descripción</strong></td>
			<td>{{ $descripcion }}</td>
		</tr>
		<tr>
			<td><strong>Banco</strong></td>
			<td>{{ $banco }}</td>
		</tr>
		<tr>
			<td><strong>Dimensión</strong></td>
			<td>{{ $dimension }} m<sup>2</sup> </td>
		</tr>
		<tr>
			<td><strong>Precio</strong></td>
			<td>${{ $precio }}</td>
		</tr>
		<tr>
			<td><strong>Fotografía</strong></td>
			<td><img src="{{ $foto }}" alt=""></td>
		</tr>
	</table>
</body>
</html>