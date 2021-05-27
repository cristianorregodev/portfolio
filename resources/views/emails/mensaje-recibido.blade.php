<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
</head>
<body>
    <p>Recibiste un mensaje de: {{ $mensaje['nombre'] }} - {{ $mensaje['correo'] }}</p>
    <p><strong>Asunto: {{ $mensaje['asunto'] }}</strong></p>
    <p><strong>Contenido: {{ $mensaje['contenido'] }}</strong></p>
</body>
</html>