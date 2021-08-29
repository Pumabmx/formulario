<?php
//print_r($_POST);
session_start();
include_once 'conexion.php';
$usuario = $_POST['txtUsu'];
$password = $_POST['txtPass'];
$sentencia = $bd->prepare('select * from registro where usuario = ? and password = ?;');
$sentencia->execute([$usuario, $password]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($datos);
if ($datos === FALSE) {
    header('Location: login.php');
} elseif ($sentencia->rowCount() == 1) {
    $_SESSION['nombre'] = $datos->usuario;
    header('Location: index.php');
}