<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{ color: blue; }
    </style>
</head>
<body>
    <h1>Correo Electronico</h1>
    <p>Este es un correo x laravel</p>

    <p><b>Nombre:</b> {{$contacto['name']}}</p>
    <p><b>Correo:</b> {{$contacto['correo']}}</p>
    <p><b>Mensaje:</b> {{$contacto['mensaje']}}</p>
</body>
</html>