<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registro</h1>
    <section>
        <div>
            <form action="post">
                <h1>Registro</h1>

                <label for="usuario">Ingrese su Usuario:</label>
                <input type="text" name="usuario" id="">
                
                <label for="clave">Ingrese su Contraseña:</label>
                <input type="password" name="clave" id="">

                <label for="name_full">Ingrese su Nombre Completo:</label>
                <input type="text" name="name_full" id="">

                <label for="number">Ingrese su DNI:</label>
                <input type="number" name="DNI" id="">

                <label for="edad">Ingrese su Edad:</label>
                <input type="number" name="edad" id="">

                <label for="email">Ingrese su Email:</label>
                <input type="email" name="email" id="">

                <input type="submit" name="ingresar">

                <a href="registro.php">¿No tenes cuenta?Registrate Acá</a>
            </form>
        </div>
    </section>
</body>
</html>