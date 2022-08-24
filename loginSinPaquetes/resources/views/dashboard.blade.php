<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Sin paquetes</title>

</head>

<body>
    @include('partials.nav')
   
    <h1>Bienvenido al Dashboard del Proyecto Login sin paquetes</h1>

    <br>
    <br>
   
    <pre>{{ Auth::user() }}</pre>
</body>

</html>
