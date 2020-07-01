<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{$design_css}}">
	

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Poiret+One&family=Raleway:wght@500&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="{{ asset('img/cv.png') }}" />
		
	<title> Curriculum Vitae - @yield('titulo') </title>

</head>
<body>
	<div id="up"></div>
	<span id="carga" class="carga">
		<img src="{{ asset('img/cv.png') }}">
		<p>Cargando...</p>
	</span>

	@include('messages.message-correct')
	@include('messages.message-error')

		@yield('contenido')

	<script type="text/javascript" src="{{$design_js}}"></script>
	{{--<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script> --}}
</body>

<div class="footer">
			Desarrolla tu <a href="/">Curriculum Vitae</a> | Contacto: <a href="mailto:cvitae@solinfori.com">cvitae@solinfori.com</a>
</div>
</html>