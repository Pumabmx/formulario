<?php
if (!isset($_POST['oculto'])) {
    exit();
}

include "conexion.php";
print_r("usuarios");
$documento = $_POST['txtDocumento'];
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$correo = $_POST['txtCorreo'];

$sentencia = $bd->prepare("INSERT INTO usuarios(Documento,Nombre,Apellido,Correo) VALUES (?,?,?,?);");
$resultado = $sentencia->execute([$documento, $nombre, $apellido, $correo]);

if ($resultado === true) {
//    echo "Usuario Añadido Correctamente";
    header('Location: index.php');
}else{
    echo "Operacion Fallida";
}
