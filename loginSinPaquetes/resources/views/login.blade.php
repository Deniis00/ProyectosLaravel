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
        <h1>Bienvenido al Login del Proyecto Login sin paquetes</h1>

        <Form method="post">
            @csrf
                <label for="email">
                    <input type="text" name="email" placeholder="Email...">
                </label>
                <br>
                

                <label for="password">
                    <input type="password" name="password" placeholder="Contraseña...">
                </label>
                <br>
                <button type="submit">
                    Ingresar
                </button>
        </Form>
</body>
</html>