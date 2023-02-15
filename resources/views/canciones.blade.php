<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>canciones</h1>
    

    @if(is_null($cancion_sel))

        <ul>

        @foreach ($listaCanciones as $cancion)
        <li>{{$cancion['nombre'] }} - {{ $cancion['artista']}}</li>

    

        @endforeach
        </ul>
    @else
        <h1>{{$cancion_sel['nombre']}}</h1>
        <h2></h2>
    @endif



</body>
</html>