<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<img class="ir-arriba" src="{{ asset('img/cv.png') }}" />
	<h3>Mensaje recibido desde CVitae.<h3>
	<p><b>Nombre:</b> {{$e_name}}</p>
	<p><b>Correo:</b> {{$e_email}}</p>
	<p><b>Mensaje:</b><br>{{$e_mensaje}}</p>
</body>
</html>