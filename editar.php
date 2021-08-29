<?php
session_start();
if (!isset($_GET['id'])){
    header('Location: index.php');
}
if (!isset($_SESSION['nombre'])) {
    header('Location: login.php');
} elseif (isset($_SESSION['nombre'])){
    include "conexion.php";
    $id = $_GET['id'];
    $sentencia = $bd->prepare("SELECT * FROM usuarios WHERE id = ?;");
    $sentencia->execute([$id]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
}else{
    echo "Error del sistema";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
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
    <br> <br>
    <h3>Editar Usuario</h3>
    <form method="post" action="editarProceso.php">

                <label>Documento: </label>
                <input type="text" name="txt2Documento" class="form-control" value="<?php echo $persona->Documento; ?>">

                <label>Nombre: </label>
                <input type="text" name="txt2Nombre" class="form-control" value="<?php echo $persona->Nombre; ?>">

                <label>Apellido: </label>
                <input type="text" name="txt2Apellido" class="form-control" value="<?php echo $persona->Apellido; ?>">

                <label>Correo: </label>
                <input type="text" name="txt2Correo" class="form-control" value="<?php echo $persona->Correo; ?>">

                <input type="hidden" name="oculto">
                <input type="hidden" name="id2" value="<?php echo $persona->id; ?>">
        <br>
                <td colspan="2"><input class="btn btn-primary" type="submit" value="Editar Usuario"></td>
    </form>
</center>
</body>
</html>
