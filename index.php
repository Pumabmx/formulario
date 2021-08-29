<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header('Location: login.php');
} elseif (isset($_SESSION['nombre'])) {
    include "conexion.php";
    $sentencia = $bd->query("SELECT * FROM usuarios;");
    $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
} else {
    echo "Error del sistema";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>CRUD</title>
    <meta charset="utf-8">
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
<body class="text-center">
<center>
    <h1>Bienvenido: <?php echo $_SESSION['nombre']; ?></h1>
    <h2>Lista Usuarios</h2>
    <a class="btn btn-primary" href="cerrar.php">Cerrar Sesion</a>
    <br> <br>
    <table class="table table-hover table-bordered">
        <tr class="active">
            <td>Documento</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
        <?php
        foreach ($usuarios as $dato) {
            ?>
            <tr>
                <td><?php echo $dato->Documento; ?></td>
                <td><?php echo $dato->Nombre; ?></td>
                <td><?php echo $dato->Apellido; ?></td>
                <td><?php echo $dato->Correo; ?></td>
                <td><a class="btn btn-success" href="editar.php?id=<?php echo $dato->id; ?>">Editar</a></td>
                <td><a class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar el registro?');"
                       href="eliminar.php?id=<?php echo $dato->id; ?>">Eliminar</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <a class="btn btn-primary" href="tablaInsertar.php">Insertar Registro</a>
</center>
</body>
</html>
