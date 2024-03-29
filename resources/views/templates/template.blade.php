<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style_back.css') }}">
	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Poiret+One&family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/cv.png') }}" />
	<title> CVitae - @yield('titulo') </title>
	
</head>

<body>

	@include('messages.message-correct')
    @include('messages.message-error')

	<div class="header" id="up">
		<img class="cv" src="{{ asset('img/cv.png') }}">
	</div>

		@yield('contenido')

</body>

<div class="footer">
			Desarrolla tu <a href="/">Curriculum Vitae</a> | Contacto: <a href="mailto:cvitae@solinfori.com">cvitae@solinfori.com</a>
</div>
</html>