<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>tESTING usigin custom text</H1>
    <h2><?php echo $msj ?></h2>
    <h3>{{ $msj }}{{ $edad}}</h3>
    <a href="/test">Contacto</a>
    <a href="{{ route ('testpage') }}">Contacto (Ruta con nombre)</a>
</body>
</html>