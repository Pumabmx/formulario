<?php
if (!isset($_POST['oculto'])) {
    header('Location: index.php');
}

include 'conexion.php';
$id2 = $_POST['id2'];
$documento2 = $_POST['txt2Documento'];
$nombre2 = $_POST['txt2Nombre'];
$apellido2 = $_POST['txt2Apellido'];
$correo2 = $_POST['txt2Correo'];

$sentencia = $bd->prepare("UPDATE usuarios SET Documento = ?, Nombre = ?, Apellido = ?, Correo = ? WHERE id = ?;");
$resultado = $sentencia->execute([$documento2, $nombre2, $apellido2, $correo2, $id2]);

if ($resultado === TRUE){
    header('Location: index.php');
}else{
    echo "Error";
}