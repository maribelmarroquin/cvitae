<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
<body>
    <img class="ir-arriba" src="{{ asset('img/cv.png') }}" style="width: 96; height:72;"/>
    <h2>Hola {{ $usuario }};</h2> 
    <p>¡Gracias por registrarte en <strong>CVitae</strong> !</p>
    <p>Por favor confirma tu correo electrónico.</p>
    <p>Para ello simplemente debes hacer click en el siguiente enlace:</p>

    <a href="{{ url('/register/verify/' . $confirmation_code) }}">
        Clic para confirmar tu email
    </a>

    <h3>¡Saludos! 🙂</h3>
</body>
</html>