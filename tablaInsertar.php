<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>CRUD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .checkbox {
            font-weight: 400;
        }
        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>
<body>
<center>
    <a class="btn btn-primary" href="index.php">Regresar</a>
    <h3>Ingresar Usuarios</h3>
    <form method="POST" action="insertar.php">
        <label>Documento: </label>
        <input type="text" name="txtDocumento" class="form-control" placeholder="Documento" required autofocus>

        <label>Nombre: </label>
        <input type="text" name="txtNombre" class="form-control" placeholder="Nombre" required autofocus>

        <label>Apellido: </label>
        <input type="text" name="txtApellido" class="form-control" placeholder="Apellido" required autofocus>

        <label>Correo: </label>
        <input type="text" name="txtCorreo" class="form-control" placeholder="Correo" required autofocus>
        <br>
        <input type="hidden" name="oculto" value="1">
        <td><input class="btn btn-primary" type="reset" name=""></td>
        <td><input class="btn btn-primary" type="submit" value="Ingresar Usuario"></td>
    </form>
</center>
</body>
</html>